<?php namespace Web\Sitesetting;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function registerComponents()
    {
    	return [
    		'Web\Sitesetting\Components\Setting' => 'Setting'
    	];
    }

    public function registerSettings()
    {
    }
}
