<?php namespace Csatar\Forms\Traits;

use http\Env\Request;
use Input;
use Flash;
use File;
use Validator;
use Csatar\Forms\Models\Form;
use Response;
use Cookie;
use Redirect;
use Backend\Classes\WidgetManager;
use October\Rain\Exception\ApplicationException;
use October\Rain\Exception\NotFoundException;

trait AjaxControllerSimple {

    use \System\Traits\ConfigMaker;

    public $widget;

    protected $current_model;

    public function formGetWidget()
    {
        return $this->widget;
    }

    /**
     * Registers backend widgets for frontend use
     */
    public function loadBackendFormWidgets() {
        $widgets = [
            'Backend\FormWidgets\DatePicker' => [
                'label' => 'Date picker',
                'code'  => 'datepicker'
            ],
            'Backend\FormWidgets\RichEditor' => [
                'label' => 'Rich editor',
                'code'  => 'richeditor'
            ],
            'Backend\FormWidgets\Relation' => [
                'label' => 'Relation',
                'code'  => 'relation'
            ],
            'Backend\FormWidgets\MarkdownEditor' => [
                'label' => 'MarkdownEditor',
                'code'  => 'markdown'
            ],
            // Custom file upload for frontend use
            'Csatar\Forms\Widgets\FrontendFileUpload' => [
                'label' => 'FileUpload',
                'code'  => 'fileupload'
            ]
        ];

        foreach ($widgets as $className => $widgetInfo) {
            WidgetManager::instance()->registerFormWidget($className, $widgetInfo);
        }
    }

    public function createForm($preview = false) {

        $form  = Form::find($this->formId);
        $record = $this->getRecord();

        if(!$record && $this->recordKeyValue == $this->createRecordKeyword) {
            $modelName  = $form->getModelName();
            $record      = new $modelName;
        }

        if(!$record) {
            throw new NotFoundException();
        }

        $this->model = $record;

        $config = $this->makeConfig($form->getFieldsConfig());
        $config->arrayName = 'data';
        $config->alias = $this->alias;
        $config->model = $record;

        // Autoload belongsTo relations
        foreach($record->belongsTo as $name => $definition) {
            if (!Input::get($name)) {
                continue;
            }

            $key = isset($definition['key']) ? $definition['key'] : $name . '_id';
            $record->$key = Input::get($name);
            $config->fields[$name]['readOnly'] = 1;
        }

        $this->widget = new \Backend\Widgets\Form($this, $config);

        $this->loadBackendFormWidgets();

        $html = $this->widget->render(['preview' => $preview]);
        if(!$preview){
            $html .= $this->renderValidationTags($record);
        }

        $html .= $this->renderBelongsToManyRalationsWithPivotData($record);
        $variablesToPass = [
            'form' => $html,
            'additionalData' => $this->additionalData,
            'recordKeyParam' => 'id',
            'recordKeyValue' => $record->id ?? 'new',
            'from_id' => $form->id,
            'preview' => $preview ];

        return $this->renderPartial('@partials/form', $variablesToPass);
    }

    public function onAddPivotRelation(){
        $relationName = Input::get('relationName');
        $relationId = Input::get($relationName);
        return $this->createPivotForm(false, $relationName, $relationId);
    }

    public function onCloseAddEditArea(){
        $relationName = Input::get('relationName');
        return [
            '#add-edit-' . $relationName => ''
        ];
    }

    public function onListAttachOptions(){
        $record = $this->getRecord();
        $relationName = Input::get('relationName');
        $attachedIds = $record->{$relationName}->pluck('id');
        $pivotModelName = array_key_exists($relationName, $record->belongsToMany) ? $record->belongsToMany[$relationName][0] : false;
        $getFunctionName = 'get' . $this->underscoreToCamelCase($relationName, true) . 'Options';

        \Model::extend(function($model) use ($getFunctionName, $pivotModelName, $attachedIds){
            $model->addDynamicMethod($getFunctionName, function() use ($model, $pivotModelName, $attachedIds) {
                return $pivotModelName::whereNotIn('id', $attachedIds)->get()
                    ->lists('name', 'id');
            });
        });

        $model = new \Model();

        $dropDownConfig = [
            'fields' => [
                    $relationName => [
                    "span" => "auto",
                    "type" => "dropdown",
                ],
            ],
            'model' => $model,
        ];

        $widget = new \Backend\Widgets\Form($this, $dropDownConfig);

        $this->loadBackendFormWidgets();

        $html = $widget->render();

        return [
            '#add-edit-' . $relationName => $this->renderPartial('@partials/relationOptions', [ 'html' => $html, 'relationName' => $relationName ])
        ];


    }

    public function createPivotForm($preview = false, $relationName, $relationId) {

        $record = $this->getRecord();
        $pivotModelName = array_key_exists($relationName, $record->belongsToMany) ? $record->belongsToMany[$relationName][0] : false;
        $relatedModel = $pivotModelName::find($relationId);

        $pivotConfig = $this->makeConfig($this->getPivotFieldsConfig($pivotModelName));
        $pivotConfig->arrayName = $relationName;
        $pivotConfig->alias = $pivotModelName;
        $pivotConfig->model = $relatedModel;
        $widget = new \Backend\Widgets\Form($this, $pivotConfig);

        $this->loadBackendFormWidgets();

        $html = $widget->render(['preview' => $preview]);
        if(!$preview){
            $html .= $this->renderValidationTags($record);
        }

        return [
            '#add-edit-' . $relationName => $this->renderPartial('@partials/relationForm', [
                'html' => $html,
                'relationName' => $relationName,
                'relationId' => $relatedModel->id
            ])
        ];
    }

    public function onSavePivotRelation(){
        $record = $this->getRecord();
        $relationName = Input::get('relationName');
        $relationId = Input::get('relationId');
        $pivotData = Input::get($relationName)['pivot'];
        $record->{$relationName}()->attach($relationId, $pivotData);

        return [
            '#pivotSection' =>
                $this->renderBelongsToManyRalationsWithPivotData($record),
            '#pivot-form' => '',
        ];
    }

    /**
     * Edits a relation
     * @return boolean
     */
    public function onEditRelated() {
        if ($response = $this->middleware()) {
            return $response;
        }

        if (!$model = $this->submission->getDataField($this->relation->field)->find(Input('recordKeyValue'))) {
           return false;
        }

        return $this->editor($this->relation->target, $this->model);
    }

    public function onSave() {

        $isNew = Input::get('recordKeyValue') == 'new' ? true : false;
        $record = $this->getRecord();

        $form = Form::find(Input::get('formId'));
        $modelName = $form->getModelName();

        if(!$record && $isNew) {
            $record = new $modelName;
        }

        if (! $data = Input::get('data')) {
            $error = e(trans('csatar.forms::lang.errors.noDataArray'));
            throw new ApplicationException($error);
        }

        // Resolve belongsTo relations
        foreach($record->belongsTo as $name => $definition) {
            if (! isset($data[$name])) {
                continue;
            }

            $key = isset($definition['key']) ? $definition['key'] : $name . '_id';
            $data[$key] = (int) $data[$name];
            unset($data[$name]);
        }

        // Resolve belongsToMany relations

        foreach($record->belongsToMany as $name => $definition) {
            if (! isset($data[$name])) {
                continue;
            }
            $record->$name()->sync($data[$name]);
//            dd($name, $definition, $data[$name]);
        }

        if($isNew) {
            $record = $record->create($data);
        }
        if (!$record->update($data) && !$isNew) {
            $error = e(trans('csatar.forms::lang.errors.canNotSaveValidated'));
            throw new ApplicationException($error);
        }

        if (Input::get('close')) {
            return $this->onCloseForm();
        }

        return [
            '#renderedFormArea' => $this->renderPartial('@partials/saved')
        ];
    }

    public function onDelete() {

        $record = $this->getRecord();
        if($record){
            $record->delete();
        } else {
            throw new NotFoundException();
        }

    }

    public function renderValidationTags($model) {
        $html = "<div id='validationTags'>";
        foreach($model->rules as $fieldName => $rule) {
            $html .= "<span data-validate-for='" . $fieldName . "'></span>";
        }
        $html .= "</div>";

        return $html;
    }

    private function getRecord() {
        $form       = Form::find($this->formId ?? Input::get('formId'));
        $modelName  = $form->getModelName();
        $key        = $this->recordKeyParam ?? Input::get('recordKeyParam');
        $value      = $this->recordKeyValue ?? Input::get('recordKeyValue');

        $record      = $modelName::where($key, $value)->first();

        if(!$record) {
            //TODO handle trashed records
            return null;
        }

        return $record;
    }

    public function getPivotFieldsConfig($model, $pivotFieldsConfig = 'fieldsPivot.yaml') {
        if ($pivotFieldsConfig[0] != '$') {
            $pivotFieldsConfig = '$/' . str_replace('\\', '/', strtolower($model)) . '/' . $pivotFieldsConfig;
        }
        $pivotFieldsConfig = File::symbolizePath($pivotFieldsConfig);
        if(!File::isFile($pivotFieldsConfig)){
            return false;
        }

        return $pivotFieldsConfig;
    }

    public function getPivotListConfig($model, $pivotListConfig = 'columnsPivot.yaml') {
        if ($pivotListConfig[0] != '$') {
            $pivotListConfig = '$/' . str_replace('\\', '/', strtolower($model)) . '/' . $pivotListConfig;
        }
        $pivotListConfig = File::symbolizePath($pivotListConfig);
        if(!File::isFile($pivotListConfig)){
            return false;
        }
        return $pivotListConfig;
    }

    public function renderBelongsToManyRalationsWithPivotData($record){
        $html = '<div class="row" id="pivotSection">';
        foreach($record->belongsToMany as $relationName => $definition) {
            if(!empty($definition['pivot']) && $this->getPivotListConfig($definition[0])){
                $html .= $this->generatePivotSection($record, $relationName, $definition);
            }
        }
        $html .= '</div>';

        return $html;
    }

    public function attributesToDisplay($pivotConfig){
        $attributesToDisplay = [];
        foreach ($pivotConfig->columns as $columnName => $data){
            if(strpos($columnName, 'pivot') !== false){
                $pivotColumn = str_replace(']', '', str_replace('pivot[', '', $columnName));
                $data['isPivot'] = true;
                $attributesToDisplay[$pivotColumn] = $data;
            } else {
                $attributesToDisplay[$columnName] = $data;
            }
        }
        return $attributesToDisplay;
    }

    public function generatePivotSection($record, $relationName, $definition){
        $pivotModelName = $definition[0];
        $pivotConfig = $this->makeConfig($this->getPivotListConfig($pivotModelName));
        $attributesToDisplay = $this->attributesToDisplay($pivotConfig);
        $relationLabel = array_key_exists('label', $definition) ? \Lang::get($definition['label']) : $relationName;
        $html = '<div class="col-12 mb-4">';
        $html .= '<div class="field-section toolbar-item toolbar-primary"><h4 style="display:inline;">' . $relationLabel . '<i class="fa-solid fa-trash-can"></i>';

        $html .= '</h4><div class="add-remove-button-container"><button class="btn btn-sm rounded btn-primary"
            data-request="onListAttachOptions"
            data-request-data="relationName: \'' . $relationName . '\'"><i class="bi bi-plus-square"></i></button>';
        $html .= '<button class="btn btn-default btn-danger btn-sm"
            data-request="onDeletePivotRelation" data-request-data="relationName: \'' . $relationName . '\'"><i class="bi bi-trash"></i></button></div></div>';
        $html .= '<div id="add-edit-' . $relationName . '"></div>';
        if(count($record->$relationName)>0){
            $html .= '<table style="width: 100%">';
            $html .= $this->generatePivotTableHeader($attributesToDisplay);
            $html .= $this->generatePivotTableRows($record, $relationName, $attributesToDisplay);
            $html .= '</table>';
        }

        $html .= '</div>';

        return $html;
    }

    public function onDeletePivotRelation(){
        $record = $this->getRecord();
        $relationName = Input::get('relationName');
        $data = Input::get('data');
        $recordsToDelete = array_key_exists($relationName, $data) ? $data[$relationName] : [];
        $record->{$relationName}()->detach($recordsToDelete);

        return [
            '#pivotSection' =>
                $this->renderBelongsToManyRalationsWithPivotData($record)
        ];
    }

    public function onRefresh(){

    }

    public function generatePivotTableHeader($attributesToDisplay){
        $tableHeaderRow = '<tr><th></th>';
        foreach ($attributesToDisplay as $data){
            // generate table header
            $label = $data['label'];
            $tableHeaderRow .= '<th>' . \Lang::get($label) . '</th>';
        }
        $tableHeaderRow .= '</tr>';

        return $tableHeaderRow;
    }

    public function generatePivotTableRows($record, $relationName, $attributesToDisplay){
        $tableRows = '';
        foreach ($record->{$relationName} as $relatedRecord){
            $tableRows .= '<tr>';
            $tableRows .= '<td><input type="checkbox" name="data[' . $relationName . '][]" value="' . $relatedRecord->id .'"></td>';
            foreach ($attributesToDisplay as $key => $data){
                $tableRows .= '<td>' . ( array_key_exists('isPivot', $data) ? $relatedRecord->pivot->{$key} : $relatedRecord->{$key})  . '</td>';
            }
            $tableRows .= '</tr>';
        }

        return $tableRows;
    }

    public function underscoreToCamelCase($string, $capitalizeFirstCharacter = false){

        $str = str_replace('_', '', ucwords($string, '_'));

        if (!$capitalizeFirstCharacter) {
            $str = lcfirst($str);
        }

    return $str;
    }

}
