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

    public function test_setting_customer_id()
    {
        $order = new Order();

        $this->assertNull($order->getCustomerId());

        $order->setCustomerId(5);
        $this->assertSame(5, $order->getCustomerId());
    }

    public function test_setting_status()
    {
        $order = new Order();

        $this->assertNull($order->getStatus());

        $order->setStatus(222);
        $this->assertSame(222, $order->getStatus());
    }
}