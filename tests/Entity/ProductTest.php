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

    public function test_setting_description()
    {
        $product = new Product();

        $this->assertNull($product->getDescription());

        $product->setDescription("Lorem ipsum dolor sit amet...");
        $this->assertSame("Lorem ipsum dolor sit amet...", $product->getDescription());
    }

    public function test_setting_image()
    {
        $product = new Product();

        $this->assertNull($product->getImage());

        $product->setImage("https://beauty-tools/tool_01.png");
        $this->assertSame("https://beauty-tools/tool_01.png", $product->getImage());
    }
}