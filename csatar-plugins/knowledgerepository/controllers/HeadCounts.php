<?php namespace Csatar\KnowledgeRepository\Controllers;

use Backend\Classes\Controller;
use BackendMenu;

class HeadCounts extends Controller
{
    public $implement = [
        'Backend\Behaviors\ListController',
        'Backend\Behaviors\FormController',
        'Backend\Behaviors\ReorderController'
    ];

    public $listConfig    = 'config_list.yaml';
    public $formConfig    = 'config_form.yaml';
    public $reorderConfig = 'config_reorder.yaml';

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('Csatar.KnowledgeRepository', 'main-menu-knowledge-repository-parameters', 'side-menu-headcount');
    }

    public $requiredPermissions = [
        'csatar.manage.data',
        'csatar.manage.knowledgerepository',
    ];
}
