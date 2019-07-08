<?php namespace Web\Contact\Components;
use Cms\Classes\ComponentBase;
use Web\Hotel\Models\Tour;
use Web\Hotel\Models\Event;
use Web\Hotel\Models\FoodBeverage;
use Web\Hotel\Models\Souvenir;
use Web\Hotel\Models\Hotel;
use Web\Hotel\Models\Room;

class Search extends ComponentBase
{
   public function componentDetails()
   {
   	 return [
   	 	'name'        => 'Search',
   	 	'description' => 'Result Search',
   	 ];
   }

  public function onRun(){
    $data = $this->onSend();
    if ($data !="No keywords were found?") {
      $this->page['search'] = $data['data'];
      $this->page['cate_search']   = $data['cate'];
    }else{
       $this->page['erro_search'] = "No keywords were found!";
    }
  }

   public function onSend(){
   	$search = get();
      if (!empty( $search)) {
         $searchs = '%'.$search['search'].'%';
         $tour     = Tour::where('name', 'like',  $searchs)->get();
         $event    = Event::where('name', 'like', $searchs)->get(); 
         $food     = FoodBeverage::where('name', 'like', $searchs)->get();
         $souvenir = Souvenir::where('name', 'like', $searchs)->get();
         $hotel    = Hotel::where('name', 'like',  $searchs)->get();
         $room     = Room::where('name', 'like',  $searchs)->get();
         if (count($tour) > 0) {
            $data = array(
              "data" =>$tour,
              'cate'  =>1
            );
            return $data;
         }elseif(count($event) > 0){
            $data = array(
              "data" =>$event,
              'cate'  =>4
            );
           return $data; 
         }elseif(count($food) > 0){
            $data = array(
              "data" =>$food,
              'cate'  =>3
            );
            return $data; 
         }elseif(count($souvenir) > 0){
            $data = array(
              "data" =>$souvenir,
              'cate'  =>5
            );
            return  $data; 
         }elseif(count($hotel ) > 0){
            $data = array(
              "data" =>$hotel,
              'cate'  =>2
            );
            return  $data; 
         }elseif(count($room) > 0){
            $data = array(
              "data" =>$room,
              'cate'  =>6
            );
            return  $data; 
         }else{
            return "No keywords were found?";
         }
      }
		
	}
}