<?php namespace Web\Hotel\Components;
use Cms\Classes\ComponentBase;
use Web\Hotel\Models\Tour as Tours;
use Web\Hotel\Models\Location as Location;
class Tour extends ComponentBase
{
	public $tour;
	public $tour2;
	public $tour3;
	public function componentDetails(){
		 return [
            'name'         => 'Tour',
            'description'  => 'List Tours'
        ];
	}

	public function onRun(){
		$this->page['page'] = 'travel';
		$this->tour = $this->page['data'] = $this->loadTour1();
		$this->tour2 = $this->page['data2'] = $this->loadTour2();
		$this->tour3 = $this->page['data3'] = $this->loadTour3();
	}

	public function loadTour1(){
		$data= [];
		$data = Tours::where('active', 1)->orderBy('created_at', 'asc')->paginate(12,1);
		return $data;
	}
	public function loadTour2(){
		$data= [];
		$data = Tours::whereHas('locations', function ($query) {
			$query->where('id', 2);
		})->where('active', 1)->orderBy('created_at', 'asc')->paginate(6);
		return $data;
	}
	public function loadTour3(){
		$data= [];
		$data = Tours::whereHas('locations', function ($query) {
			$query->where('id', 3);
		})->where('active', 1)->orderBy('created_at', 'asc')->paginate(6);
		return $data;
	}
	public function getSale(){
		$data =  Tours::where('sale',1)->orderBy('created_at', 'asc')->take(5)->get();
		return $data;
	}
}