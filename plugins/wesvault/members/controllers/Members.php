<?php namespace Wesvault\Members\Controllers;

use Backend\Classes\Controller;
use BackendMenu;

class Members extends Controller
{
    public $implement = [        'Backend\Behaviors\ListController',        'Backend\Behaviors\FormController'    ];
    
    public $listConfig = 'config_list.yaml';
    public $formConfig = 'config_form.yaml';

    public $requiredPermissions = [
        'manage_member' 
    ];

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('Wesvault.Members', 'member');
    }
}
