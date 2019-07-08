<?php namespace Web\Slider\Components;
use Cms\Classes\ComponentBase;
use Web\Slider\Models\Bookup as Bookups;
use DB;
use Web\Hotel\Models\Event;

class Bookup extends ComponentBase
{
	public $bookup;
	public function componentDetails(){
		 return [
            'name'         => 'Bookup',
            'description'  => 'Ảnh Bookup'
        ];
	}

	public function onRun(){
		$this->bookup  = $this->loadSetting();

	}

	public function loadSetting(){
		$data = Bookups::where('active',1)->first();
		return $data;
	}


}