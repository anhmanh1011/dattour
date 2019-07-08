<?php namespace Web\Slider\Components;
use Cms\Classes\ComponentBase;
use Web\Slider\Models\Slider as Sliders;
use DB;
class Slider extends ComponentBase
{  
	public $slider;
	public function componentDetails(){
		 return [
            'name'         => 'Slider list',
            'description'  => 'Ảnh slider'
        ];
	}
	public function onRun(){
		$this->slider  = $this->loadSettings();
	}
	public function loadSettings(){
		$data = Sliders::where('active',1)->get();
		// dump($data);
		return $data;
	}
}