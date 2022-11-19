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
}