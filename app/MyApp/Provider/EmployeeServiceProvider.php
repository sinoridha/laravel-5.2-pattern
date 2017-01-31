<?php

namespace App\MyApp\Provider;

use Illuminate\Support\ServiceProvider;

class EmployeeServiceProvider extends ServiceProvider
{
    public function register()
    {
        /* Bind interface iGetEmployee if called from EmployeeService */
        $this->app->when('App\MyApp\Service\EmployeeProfileService')
              ->needs('App\MyApp\Contract\iEmployeeProfile')
              ->give('App\MyApp\Repository\EmployeeRepository');

        /* Bind inteface iGetEmployeeCompany when called from EmployeeService */
        $this->app->when('App\MyApp\Service\EmployeeProfileService')
               ->needs('App\MyApp\Contract\iTaskProfile')
               ->give('App\MyApp\Repository\TaskRepository');
    }

}
