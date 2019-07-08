<?php namespace Web\Hotel\Components;

use Cms\Classes\ComponentBase;
use Web\Hotel\Models\Event;
use Web\Hotel\Models\FoodBeverage;
use Web\Hotel\Models\Souvenir;
use Web\Hotel\Models\Location;
use Illuminate\Pagination\LengthAwarePaginator;
use Request;
use Redirect;
use Db;



class ProductList extends ComponentBase
{

  public $productlist;

  public function componentDetails()
  {
    return [
      'name' => 'List View Product',
      'description' => 'View List Product'
    ];
  }
  public function onRun()
  {
    $this->getProductPercent();
    $this->page['city'] = location::all()->toArray();
  }

  public function getProductPercent()
  {
    $slug = $this->param('slug');
    if ($slug == "cuisine") {
      $this->page['titte_page'] = 'CUISINE';
      $this->page['page'] = 'cuisine';
    } elseif ($slug == "event") {
      $this->page['titte_page'] = 'EVENT';
      $this->page['page'] = 'event';
    } elseif ($slug == "service-store") {
      $this->page['titte_page'] = 'STORE';
      $this->page['page'] = 'store';
    } else {
      $data = 404;
    }
  }
}

