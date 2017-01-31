<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller ;
use Illuminate\Http\Request ;
use App\MyApp\Service\EmployeeProfileService;
use App\MyApp\Repository\EmployeeRepository;
use App\MyApp\Repository\TaskRepository;

class EmployeeController extends Controller
{

    public function getEmployeeData(Request $request, $id)
    {
        /**
         * Implementation without service container will be like this, we have
         * to define dependency one by one.
         *
         * $service = new EmployeeProfileService(new EmployeeRepository,new TaskRepository);
         */

         /** Inisiate service container via service provider */
        $service = app('App\MyApp\Service\EmployeeProfileService');

        return $service->getEmployeeProfile($id);
    }
}
