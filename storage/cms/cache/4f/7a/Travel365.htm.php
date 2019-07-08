<?php 
use Web\Hotel\Models\Tour as Tours;class Cms5ce27fc8e5dd6328819713_c784900273cd4cd326d4f1bad9495ca7Class extends Cms\Classes\LayoutCode
{


public function onSearch(){ 
        $key = post('searchKey');
        $this['search'] = Tours::where('name', 'like', '%'.$key.'%')->where('active', '=', 1)->take(10)->get();
    }
}
