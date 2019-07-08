<?php namespace Web\Hotel\Components;

use Cms\Classes\ComponentBase;
// use Cms\Classes\Controller;
use Request;
use Redirect;
use Lang;
use Web\Hotel\Models\Tour as Tours;
use Web\Hotel\Models\Location ;
// use Web\Hotel\Models\Room as Rooms ;
use DB;


class TourDetail extends ComponentBase{
  public $name;
  public $tours;
  public $tourHot;
	public function componentDetails(){
		return [
			'name' => 'View Detail Tour',
			'description' => 'Show tour details',
		];
	}


	public function onRun(){
		$this->page['page'] = 'travel';
        $data = $this->getTourDetail();
        $this->tours = $this->getListTour($data[0]->id);
        $this->tourHot = $this->getListTourHot($data[0]->id);
        $this->page['tour_detail']         = $data[0];
        $this->page['star4']      = $data[0]['star_rate4']; 
        $this->page['star5']      = $data[0]['star_rate5']; 
        $this->name = $this->page['location_name'] = $data[1];
	}
    public function getTourDetail(){
        $slug = $this->param('slug');
        $data = Tours::where('active', 1)->transWhere('slug', $slug)->first();
        $location_id = $data['locations_id'];
        $location_name = Location::where('id', $location_id)->select('name')->first();
        $data_array = [];
        array_push($data_array,$data,$location_name );
        return $data_array;
    }
	public function getListTour($id){
        $data = Tours::where('active', 1)->where('id','<>',$id)->take(6)->get();
        return $data;
    }
	public function getListTourHot($id){
        $data = Tours::where('active', 1)->where('hot',true)->where('id','<>',$id)->take(6)->get();
        return $data;
    }
    public function onGetStarRate(){
        $post= post();
        // dump($post['value']);
        if($post['value']==4){
            Tours:: where('id', $post['id'])
                    ->update(['star_rate4' => $post['star4']+1]);
        }
        elseif($post['value']==5){
            Tours:: where('id', $post['id'])
                    ->update(['star_rate5' => $post['star5']+1]);
        }
	}
}
