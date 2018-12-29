<?php 

namespace Wesvault\Weather\Components;

use Cache;
use Request;
use Cms\Classes\ComponentBase;
use System\Classes\ApplicationException;

class Weather extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name'        => 'Local weather',
            'description' => 'Outputs the local weather information on a page.'
        ];
    }

    public function defineProperties()
    {
        return [
            'country' => [
                'title'             => 'Country',
                'type'              => 'dropdown',
                'default'           => 'us'
            ],
            'state' => [
                'title'             => 'State',
                'type'              => 'dropdown',
                'default'           => 'dc',
                'depends'           => ['country'],
                'placeholder'       => 'Select a state'
            ],
            'city' => [
                'title'             => 'City',
                'type'              => 'string',
                'default'           => 'Washington',
                'placeholder'       => 'Enter the city name',
                'validationPattern' => '^[0-9a-zA-Z\s]+$',
                'validationMessage' => 'The City field is required.'
            ],
            'units' => [
                'title'             => 'Units',
                'description'       => 'Units for the temperature and wind speed',
                'type'              => 'dropdown',
                'default'           => 'imperial',
                'placeholder'       => 'Select units',
                'options'           => ['metric'=>'Metric', 'imperial'=>'Imperial']
            ]
        ];
    }
	
	
    public function onRun()
    {

        $this->page['weatherInfo'] = $this->info();
		$this->page['units'] = $this->property('units');
    }
	
	
    public function info()
    {
        $url = 'https://jsonplaceholder.typicode.com/users';
		
		$json = file_get_contents($url);
        
        return json_decode($json);
    }


}