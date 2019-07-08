<?php namespace Web\Slider\Components;
use Cms\Classes\ComponentBase;
use Web\Slider\Models\SliderProduct as SliderProducts;
use DB;
class SliderProduct extends ComponentBase
{  
	public $slider_product;
	public function componentDetails(){
		 return [
            'name'         => 'List Slider Product',
            'description'  => 'Slider Product'
        ];
	}
	public function onRun(){
		$this->slider_product  = $this->loadSettings();
	}
	public function loadSettings(){
		$data = SliderProducts::where('active',1)->get();
		return $data;
	}
}