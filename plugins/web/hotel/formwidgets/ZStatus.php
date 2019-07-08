<?php namespace Web\Hotel\FormWidgets;

use Backend\Classes\FormWidgetBase;
use Config;
use Web\Hotel\Models\Status;

class ZStatus extends FormWidgetBase
{
    public function widgetDetails()
    {
        return [
            'name' => 'Status',
            'description' => 'Field for adding tag'
        ];
    }

    public function render(){
        $this->prepareVars();
        return $this->makePartial('widget');
    }


    public function prepareVars(){
        $this->vars['id'] = $this->model->id;
        $this->vars['status'] = Status::all()->lists('name', 'id');
        $this->vars['color'] = Status::all()->lists('color', 'id');
        $this->vars['name'] = $this->formField->getName().'[]';
        if(!empty($this->getLoadValue())){
            $this->vars['selectedValues'] = $this->getLoadValue();
        } else {
            $this->vars['selectedValues'] = [];
        }
    }

    public function getSaveValue($status){
        if (isset($status)) {
            $newArray = [];
            foreach($status as $statusId){
                if(!is_numeric($statusId)){
                    $newStatus = new Status;
                    
                    $newStatus->name = $statusId;
                    $newStatus->save();
                    $newArray[] = $newStatus->id;
                } else {
                    $newArray[] = $statusId;
                }
            }


            return $newArray;
        }
        
    }
}
