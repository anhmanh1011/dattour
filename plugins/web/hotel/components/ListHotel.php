<?php namespace Web\Hotel\Components;
use Cms\Classes\ComponentBase;

class ListHotel extends ComponentBase
{
	public $hotel;
	public function componentDetails(){
		 return [
            'name'         => 'ListHotel',
            'description'  => 'List Hotel'
        ];
	}

	public function onRun(){
		$this->page['page'] = 'hotel';
	}
	
}