<?php namespace Web\Hotel\Components;
use Cms\Classes\ComponentBase;
use Web\Hotel\Models\Room as Rooms;
class Room extends ComponentBase
{
	// public $room;
	public function componentDetails(){
		 return [
            'name'         => 'Room',
            'description'  => 'List Rooms'
        ];
	}

	public function onRun(){
		$this->page['page'] = 'hotel';
		$this->room  = $this->loadHotel();
	}

	public function loadRoom(){
		$data = Rooms::all();
		return $data;
	}
	
}