<?php namespace Web\Hotel;

use System\Classes\PluginBase;
use App;
use Illuminate\Support\Facades\Event;
class Plugin extends PluginBase
{
    public function boot()
    {
        // Check if we are currently in backend module.
        if (!App::runningInBackend()) {
            return;
        }
        Event::listen('backend.page.beforeDisplay', function($controller, $action, $params) {
            $controller->addJs('/plugins/web/hotel/assets/js/script.js');
        });
    }
    public function registerFormWidgets()
    {
        return [
            'Web\Hotel\FormWidgets\TagBox' => [
                'label' => 'Tag field',
                'code'  => 'tagbox'
            ],
            'Web\Hotel\FormWidgets\ZStatus' => [
                'label' => 'Tag field',
                'code'  => 'zstatus'
            ]
        ];
    }
    public function registerComponents()
    {
        return [
            'Web\Hotel\Components\Hotel'              => 'Hotel',
            'Web\Hotel\Components\Room'               => 'Room',
            'Web\Hotel\Components\Tour'               => 'Tour',
            'Web\Hotel\Components\ListHotel'              => 'ListHotel',
            // 'Web\Hotel\Components\FootBeverage'       => 'FootBeverage',
            // 'Web\Hotel\Components\Souvenir'           => 'Souvenir',
            'Web\Hotel\Components\TourDetail'         => 'TourDetail',
            'Web\Hotel\Components\Booktour'           => 'Booktour',
            'Web\Hotel\Components\productDetail'      => 'ProductDetail',
            'Web\Hotel\components\productList'        => 'ProductList',
            'Web\Hotel\Components\GetHome'            => 'getHome',
            'Web\Hotel\components\RoomDetail'         => 'DetailRoom'
        ];
    }

    public function registerSettings()
    {
    }
}
