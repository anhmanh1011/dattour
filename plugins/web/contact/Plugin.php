<?php namespace Web\Contact;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function registerComponents()
    {
    	return [
    		'Web\Contact\Components\Contact' => 'contact',
    		'Web\Contact\Components\Search'  => 'search'
    	];
    }

    public function registerSettings()
    {

    }
}
