<?php namespace Web\Hotel\Controllers;

use Backend\Classes\Controller;
use BackendMenu;
use BackendAuth;

class Hotel extends Controller
{
    public $implement = [        'Backend\Behaviors\ListController',        'Backend\Behaviors\FormController',        'Backend\Behaviors\ReorderController'    ];
    
    public $listConfig = 'config_list.yaml';
    public $formConfig = 'config_form.yaml';
    public $reorderConfig = 'config_reorder.yaml';

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('Web.Hotel', 'main-menu-item', 'side-menu-item2');
    }
    public function listExtendQuery($query) {
        $user = BackendAuth::getUser();
        // dump($user->id);
        if(!$user->hasAnyAccess(['Delete'])){
            $query->where('user_created_id',$user->id);
        }
    }
    public function formBeforeCreate($model)
    {
        $model->user_created = $this->user->id;
    }
}
