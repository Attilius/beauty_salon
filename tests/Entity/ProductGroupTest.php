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

        $productGroup->setType("Beauty products");
        $this->assertSame("Beauty products", $productGroup->getType());
    }
}