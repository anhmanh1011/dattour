<?php  namespace Web\Hotel\Components;
use Cms\Classes\ComponentBase;
use Web\Hotel\Models\Event;
use Web\Hotel\Models\FoodBeverage;
use Web\Hotel\Models\Souvenir;
use Web\Hotel\Models\Location;
use Web\Hotel\Models\Tour;
use Web\Hotel\Models\Hotel;
use Web\SiteSetting\Models\Parner;



class GetHome extends ComponentBase
{
  
   public $productlist;

   public function componentDetails(){
   	return [
   		'name' => 'List Home',
   		'description' => 'View Home'
   	];
   }
   public function onRun(){
      $this->page['page'] = 'home';
   }

   public function getTour(){
      $data = Tour::where('active', 1)->take(3)->get();
      return $data;
   }
   public function getHotel(){
      $data = Hotel::where('active', 1)->take(4)->get();
      return $data;
   }
   public function getFood(){
      $data = Foodbeverage::where('active', 1)->take(3)->get();
      return $data;
   }
   public function getEvent(){
      $data = Event::where('active', 1)->take(4)->get();
      return $data;
   }
   public function getSouvenir(){
      $data = Souvenir::where('active', 1)->take(6)->get();
      return $data;
   }
   public function getParner(){
      $data = Parner::get();
      return $data;
   }
  
}