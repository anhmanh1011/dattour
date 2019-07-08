<?php 
use Web\Hotel\Models\Event;use Web\Hotel\Models\EventType;use Web\Hotel\Models\Location;use Web\Hotel\Models\FoodBeverage;use Web\Hotel\Models\TypeofFoodBeverage as Food_type;use Web\Hotel\Models\Souvenir;use Web\Hotel\Models\SouvenirType;use Web\Hotel\Models\States as States;class Cms5ce2ffa46cff6248160593_b4c190ea37cbb58be09a9f2fd3424024Class extends Cms\Classes\PageCode
{









public function onStart(){
		$this->prepareVars();
    }
public function onFilter() {$this->prepareVars();}
    //function onPagination() { $this->prepareVars(); }
public function prepareVars(){
		$slug    = $this->param('slug');
		$options = post('Filter', []);
		$types = [];
		if($slug=="event"){	
			$this['data_event'] = Event::listFrontEnd($options);
			$this['pages'] = $this['data_event']->lastPage();
      $this['page']  = $this['data_event']->currentPage();
      $this['cate_id'] = 4;
			$event_type    = EventType::get()->toArray();
			foreach($event_type as $tyle){
        $types[]       = $tyle;
      }
		}elseif($slug=="cuisine"){
			$this['data_event'] = FoodBeverage::listFrontEnd($options);
			$this['pages'] = $this['data_event']->lastPage();
      $this['page']  = $this['data_event']->currentPage();
      $this['cate_id'] = 3;
			$food_type      = Food_type::get()->toArray();
			foreach($food_type as $tyle){
        $types[]        = $tyle;
      }
		} elseif ($slug=="service-store"){
      $this['data_event'] = Souvenir::listFrontEnd($options);
      $this['pages']   = $this['data_event']->lastPage();
      $this['page']    = $this['data_event']->currentPage();
      $this['cate_id'] = 5;
			$souvenir_type   = SouvenirType::get()->toArray();
		 	foreach($souvenir_type as $tyle){
        $types[]          = $tyle;
      }
    }
    $this['types'] = $types;
    $this['states'] = States::get()->toArray();
	}
public function onEnd(){
	 $this->page->meta_title = $this->cate;
	}
}
