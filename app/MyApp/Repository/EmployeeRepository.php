<?php

namespace App\MyApp\Repository;

use App\MyApp\Contract\iEmployeeProfile;
use App\MyApp\Entity\Employee;
use App\MyApp\Entity\EmployeeCompany;

/**
 * This repository implements Interface Segregation Principle (ISP) (part of
 * SOLID Design Pattern).
 */
//class EmployeeRepository implements iGetEmployee, iGetEmployeeCompany, iEmployeeProfile
class EmployeeRepository implements iEmployeeProfile
{

    public function getDataForProfile($idEmployee)
    {
        /** Get data from Entity Employee and EmployeeCompany */
        $queryResult = [
            'nama'      => 'Ridha Ramadhansyah',
            'birth-day' => '1980-04-11',
            'job-title' => 'Software Engineer',
            'start-date'=> '2017-01-18'
        ];

        return $queryResult ;
    }

    public function getIdEmployeeCompany()
    {
        return '10';
    }
}
