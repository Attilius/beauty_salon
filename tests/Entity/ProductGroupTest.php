<?php

namespace App\Tests\Entity;

use App\Entity\ProductGroup;
use PHPUnit\Framework\TestCase;

class ProductGroupTest extends TestCase
{
    public function test_setting_type()
    {
        $productGroup = new ProductGroup();

        $this->assertNull($productGroup->getType());

        $productGroup->setType("beauty products");
        $this->assertSame("beauty products", $productGroup->getType());
    }

    public function test_setting_title()
    {
        $productGroup = new ProductGroup();

        $this->assertNull($productGroup->getTitle());

        $productGroup->setTitle("Beauty products");
        $this->assertSame("Beauty products", $productGroup->getTitle());
    }
}