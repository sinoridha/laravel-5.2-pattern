<?php

namespace App\MyApp\Service;

/** Should be no call ORM model / Package in here, do that on repository */
use App\MyApp\Contract\iEmployeeProfile;
use App\MyApp\Contract\iTaskProfile;
use Illuminate\Http\Request ;

/**
 * This class is used as container and binds in File EmployeeServiceProvider.php
 * This class is called in EmployeeController.php . Dependency injection will be
 * resolved in depedency injecton.
 *
 * At those file olso define how to inisiate this class without service provider
 * if you want your Application not depends on frameworks.
 */
class EmployeeProfileService
{
    public $employee ;

    public $task ;

    function __construct(iEmployeeProfile $employee, iTaskProfile $task){
        $this->employee = $employee;
        $this->task = $task;
    }

    public function getEmployeeProfile($id)
    {
        $data = [];

        $data['personal-data'] = $this->employee->getDataForProfile($id);

        $idEmployeeCompany = $this->employee->getIdEmployeeCompany();
        
        $data['task-list'] = $this->task->getTaskEmployee($idEmployeeCompany);

        return $data;
    }
}
