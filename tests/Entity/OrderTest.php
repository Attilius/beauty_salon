<?php

namespace App\Tests\Entity;

use App\Entity\Order;
use PHPUnit\Framework\TestCase;

class OrderTest extends TestCase
{
    public function test_setting_identify_number()
    {
        $order = new Order();

        $this->assertNull($order->getIdentifyNumber());

        $order->setIdentifyNumber("ORD-2022/007");
        $this->assertSame("ORD-2022/007", $order->getIdentifyNumber());
    }
}