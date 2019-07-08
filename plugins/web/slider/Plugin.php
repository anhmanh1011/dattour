<?php namespace Web\Slider;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function registerComponents()
    {
    	return [
    		'Web\Slider\Components\Bookup' => 'Bookup',
            'Web\Slider\Components\Slider' => 'Slider',
            'Web\Slider\Components\SliderProduct' => 'SliderProduct',
    	];
    	
    }

    public function registerSettings()
    {
    }
}
