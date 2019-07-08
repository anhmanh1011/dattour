<?php namespace Web\Hotel\Controllers;

use Backend\Classes\Controller;
use BackendMenu;

class EventType extends Controller
{
    public $implement = [        'Backend\Behaviors\ListController',        'Backend\Behaviors\FormController'    ];
    
    public $listConfig = 'config_list.yaml';
    public $formConfig = 'config_form.yaml';

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('Web.Hotel', 'main-menu-item5', 'side-menu-item2');
    }
}