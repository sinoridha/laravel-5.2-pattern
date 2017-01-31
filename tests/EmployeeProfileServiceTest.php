<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

use App\MyApp\Service\EmployeeProfileService;

class EmployeeProfileServiceTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->assertTrue(true);
    }

    public function testGetEmployeeProfile()
    {
        /** Mocking Repository Employee */
        $returnGetDataForProfile = [
            'nama'      => 'Ridha Ramadhansyah',
            'birth-day' => '1980-04-11',
            'job-title' => 'Software Engineer',
            'start-date'=> '2017-01-18'
        ];
        $returnGetIdEmployeeCompany = '10';
        $employeeProfileMock = \Mockery::mock('App\MyApp\Contract\iEmployeeProfile');
        $employeeProfileMock->shouldReceive('getDataForProfile')->with(1)->once()->andReturn($returnGetDataForProfile);
        $employeeProfileMock->shouldReceive('getIdEmployeeCompany')->once()->andReturn($returnGetIdEmployeeCompany);

        /** Mocking Repository Task */
        $returnGetTaskEmployee = [
            [
                'id' => '1',
                'task' => 'Email Partner kerja'
            ],
            [
                'id' => '2',
                'task' => 'Buat weekly report'
            ],
        ];
        $taskProfileMock = \Mockery::mock('App\MyApp\Contract\iTaskProfile');
        $taskProfileMock->shouldReceive('getTaskEmployee')->once()->andReturn($returnGetTaskEmployee);

        $service = new EmployeeProfileService($employeeProfileMock,$taskProfileMock);
        $resultService = $service->getEmployeeProfile('1');
        $resultServiceInString = json_encode($resultService);

        $expectedString = '{"personal-data":{"nama":"Ridha Ramadhansyah","birth-day":"1980-04-11","job-title":"Software Engineer","start-date":"2017-01-18"},"task-list":[{"id":"1","task":"Email Partner kerja"},{"id":"2","task":"Buat weekly report"}]}';

        $this->assertEquals($expectedString, $resultServiceInString);
    }
}
