<?php namespace Web\Hotel\Components;

use Cms\Classes\ComponentBase;
use Input;
use Web\Hotel\Models\Tour as Tours;
use Web\Hotel\Models\Location as Location;

class FilterTours extends ComponentBase
{
	public $tours;
	public $loactions;
	public function componentDetails(){
		 return [
            'name'         => 'FilterTour',
            'description'  => 'List Tours'
        ];
	}

	public function onRun(){
		$this->tours  =  $this->loadTour();
		// $this->locations  =  $this->Location::all();
	}

	public function loadTour(){
		
		$state = asset(Input::get('state'))? Input::get('state'): "";
		$hot = Input::get('hot');
		$data = Tours::all();
		
		if ($state) {
			$data = Tours::where('locations_id', '=', $state)->get();
		}

		if ($hot) {
			$data = Tours::where('hot', '=', $hot)->get();
		}

		return $data;
	}

}