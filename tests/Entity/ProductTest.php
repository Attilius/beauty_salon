<?php

namespace App\Tests\Entity;

use App\Entity\Product;
use PHPUnit\Framework\TestCase;

class ProductTest extends TestCase
{
    public function test_setting_name()
    {
        $product = new Product();

        $this->assertNull($product->getName());

        $product->setName("Beauty product");
        $this->assertSame("Beauty product", $product->getName());
    }

    public function test_setting_type()
    {
        $product = new Product();

        $this->assertNull($product->getType());

        $product->setType("Beauty tool");
        $this->assertSame("Beauty tool", $product->getType());
    }
}