<?php namespace Csatar\KnowledgeRepository;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public $require = ['Csatar.Csatar'];

    public function registerComponents()
    {
        return [
            \Csatar\KnowledgeRepository\Components\GameForm::class => 'gameForm',
            \Csatar\KnowledgeRepository\Components\MethodologyForm::class => 'methodologyForm',
        ];
    }

    public function registerSettings()
    {
    }
}
