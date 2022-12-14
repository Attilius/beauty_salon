<?php

namespace App\Tests\Entity;

use App\Entity\Employee;
use PHPUnit\Framework\TestCase;

class EmployeeTest extends TestCase
{
    public function test_setting_job_title()
    {
        $employee = new Employee();

        $this->assertNull($employee->getJobTitle());

        $employee->setJobTitle("tester");
        $this->assertSame("tester", $employee->getJobTitle());
    }

    public function test_setting_job_location()
    {
        $employee = new Employee();

        $this->assertNull($employee->getJobLocation());

        $employee->setJobLocation("Anywhere city");
        $this->assertSame("Anywhere city", $employee->getJobLocation());
    }
}