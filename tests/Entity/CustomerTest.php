<?php

namespace App\Tests\Entity;

use PHPUnit\Framework\TestCase;
use App\Entity\Customer;

class CustomerTest extends TestCase
{
    public function test_setting_phone()
    {
        $customer = new Customer();

        $this->assertNull($customer->getPhone());

        $customer->setPhone("1-555-55555");
        $this->assertSame("1-555-55555", $customer->getPhone());
    }

    public function test_setting_address1()
    {
        $customer = new Customer();

        $this->assertNull($customer->getAddress1());

        $customer->setAddress1("Anywhere street 11");
        $this->assertSame("Anywhere street 11", $customer->getAddress1());
    }

    public function test_setting_address2()
    {
        $customer = new Customer();

        $this->assertNull($customer->getAddress2());

        $customer->setAddress2("Somewhere avenue 11");
        $this->assertSame("Somewhere avenue 11", $customer->getAddress2());
    }
}