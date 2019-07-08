<?php 
use Web\Hotel\Models\Hotel as Hotel;use Web\Hotel\Models\HotelType as Type;use Web\Hotel\Models\AmentitiesHotel as Amenities;use Web\Hotel\Models\Location as Location;use Web\Hotel\Models\States as States;class Cms5ce2966386d0c571053820_46efff5ab18abd3a147f40b297c75633Class extends Cms\Classes\PageCode
{

    
    
    
    
    
public function onStart(){ $this->prepareVars();}
public function onFilterHotel() { $this->prepareVars(); }
public function onPagination() { $this->prepareVars(); }
public function prepareVars() {
        $options = post('Filter', []);

        $this['hotel']      = Hotel::listFrontEnd($options);
        $this['states']     = States::get()->toArray();
        $this['amenities']  = Amenities::get()->toArray();
        $this['types']      = Type::get()->toArray();
        $this['pages']      = $this['hotel']->lastPage();
        $this['page']       = $this['hotel']->currentPage();
    }
public function onEnd(){
        $this->page->meta_title = "Hotel";
    }
}
