<?php namespace Web\Hotel\Components;
use Cms\Classes\ComponentBase;
use Web\Hotel\Models\Hotel as Hotels;
use Web\Hotel\Models\Room;
use DB;
use Redirect;

class Hotel extends ComponentBase
{
	public $hotel;
	public function componentDetails(){
		 return [
            'name'         => 'Hotel',
            'description'  => 'List Hotel'
        ];
	}

	public function onRun(){
		$data = $this->getListRoom();
		if ($data!=null) {
		   $this->page['meta_title']       = $data['hotel']->name;
		   $this->page['meta_description'] = $data['hotel']->description;
		   $this->page['meta_keyword']     = $data['hotel']->seo_keywords;
		   $this->page['robot_index']      = $data['hotel']->robot_index;
		   $this->page['robot_follow']     = $data['hotel']->robot_follow;
		   $this->page['address']          = $data['hotel']->locationdetail;
		   $this->page['content']          = $data['hotel']->content;
		   $this->page['hotel']            = $data['hotel'];
		   $this->page['list_room']        = $data['room'];
		   $this->page['utilities']        = $data['utilities'];
		}else{
			return Redirect::to('/404');
		}
	}
	public function loadHotel(){
		$data = Hotels::orderBy('created_at', 'asc')->all();
		return $data;
	}
	public function getListRoom(){
		$slug  = $this->param('slug');
		$hotel = Hotels::where('active',1)->transWhere('slug',$slug)->first();
		if (!empty($hotel)) {
			$room = Room::where('hotels_id',$hotel->id)->where('active',1)->get();
			$utilities = DB::table('web_hotel_amenities')->join('web_hotel_relation_type_room_amenities','web_hotel_amenities.id','=','web_hotel_relation_type_room_amenities.amenities_id')->select('name','room_id')->get()->toArray();
			$data_array = array(
				'hotel'     => $hotel,
				'room'      => $room,
				'utilities' =>$utilities
		);
		 return $data_array;
		}else{
		 return null;
		}
	}
}