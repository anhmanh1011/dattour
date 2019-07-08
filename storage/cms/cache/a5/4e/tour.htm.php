<?php 
use Web\Hotel\Models\Tour as Tours;use Web\Hotel\Models\TourActivities as Activities;use Web\Hotel\Models\TourType as TourType;use Web\Hotel\Models\Location as Location;use Web\Hotel\Models\States as States;class Cms5ce27fcbece43234566647_d0dff04912106469a80a5879a3b50597Class extends Cms\Classes\PageCode
{

    
    
    
    
    
public function onStart(){ $this->prepareVars();}
public function onFilterTravel() { $this->prepareVars(); }
public function onFilterMore() { $this->prepareVars(); }
public function onPagination() { $this->prepareVars(); }
public function prepareVars() {
        $options = post('Filter', []);

        $this['tours'] = Tours::listFrontEnd($options);
        $this['activities'] = Activities::get()->toArray();
        $this['states'] = States::get()->toArray();
        $this['pages'] = $this['tours']->lastPage();
        $this['page'] = $this['tours']->currentPage();

        $tours = TourType::get()->toArray();

        $types = [];
        foreach($tours as $tour){
            $types[] = $tour;
        }
        $this['types'] = $types;
    }
public function onEnd(){
        $this->page->meta_title = "Travel";
    }
}
