<?php

namespace App\Tests\Entity;

use App\Entity\User;
use PHPUnit\Framework\TestCase;

class UserTest extends TestCase
{
    public function testSettingEmail()
    {
        $user = new User();

        $this->assertNull($user->getEmail());

        $user->setEmail("example@test.com");
        $this->assertSame("example@test.com", $user->getEmail());
    }

}