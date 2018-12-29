<?php 
namespace Wesvault\Weather;

# defines the object
use System\Classes\PluginBase;

class Plugin extends PluginBase
{

    public function pluginDetails()
    {
        return [
            'name'        => 'Weather',
            'description' => 'Provides the local weather information.',
            'author'      => 'Alexey Bobkov, Samuel Georges',
            'icon'        => 'icon-sun-o'
        ];
    }

	
	#defines a component for reg
    public function registerComponents()
    {
        return [
           '\Wesvault\Weather\Components\Weather' => 'weather'
        ];
    }
}