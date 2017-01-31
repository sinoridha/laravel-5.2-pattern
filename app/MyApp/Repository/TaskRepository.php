<?php

namespace App\MyApp\Repository;

use App\MyApp\Contract\iTaskProfile ;

class TaskRepository implements iTaskProfile
{
    public function getTaskEmployee($idEmployeeCompany)
    {
        /** use entity task to get data */
        $queryResult = [
            [
                'id' => '1',
                'task' => 'Email Partner kerja'
            ],
            [
                'id' => '2',
                'task' => 'Buat weekly report'
            ],
        ];

        return $queryResult;
    }
}
