<?php namespace Web\Search\Components;

use Cms\Classes\ComponentBase;
use Web\Hotel\Models\Tour;
use Web\Hotel\Models\Location;

class Search extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name'        => 'Search',
            'description' => 'Tính năng tìm kiếm thông minh'
        ];
    }

    public function defineProperties()
    {
        return [];
    }

    public function onRun()
    {
        $this->addJs('/plugins/web/search/assets/js/script.js');
    }
    public function onSearch()
    {
        $thi = Tours::orderBy('created_at', 'desc')->paginate(12,1);
        
        Flash::success('Jobs done!');
    }

}
