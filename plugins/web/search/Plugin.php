<?php namespace Web\Search;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function registerComponents()
    {
        return [
            'Web\Search\Components\Search'              => 'Search',
        ];
    }

    public function registerSettings()
    {
    }
}
