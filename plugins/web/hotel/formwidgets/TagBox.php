<?php namespace Web\Hotel\FormWidgets;

use Backend\Classes\FormWidgetBase;
use Config;
use Web\Hotel\Models\Tag;

class TagBox extends FormWidgetBase
{
    public function widgetDetails()
    {
        return [
            'name' => 'TagBox',
            'description' => 'Field for adding tag'
        ];
    }

    public function render(){
        $this->prepareVars();
        return $this->makePartial('widget');
    }


    public function prepareVars(){
        $this->vars['id'] = $this->model->id;
        $this->vars['tags'] = Tag::all()->lists('name', 'id');
        $this->vars['name'] = $this->formField->getName().'[]';
        if(!empty($this->getLoadValue())){
            $this->vars['selectedValues'] = $this->getLoadValue();
        } else {
            $this->vars['selectedValues'] = [];
        }
    }

    public function getSaveValue($tags){
        if (isset($tags)) {
            $newArray = [];
            foreach($tags as $tagID){
                if(!is_numeric($tagID)){
                    $newTag = new Tag;
                    
                    $newTag->name = $tagID;
                    $newTag->save();
                    $newArray[] = $newTag->id;
                } else {
                    $newArray[] = $tagID;
                }
            }


            return $newArray;
        }
        
    }
}
