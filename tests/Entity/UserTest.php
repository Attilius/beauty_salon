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

    public function testSettingRoles()
    {
        $user = new User();

        $this->assertSame(["ROLE_USER"], $user->getRoles());

        $user->setRoles(["ROLE_USER","ROLE_ADMIN","ROLE_ADMIN"]);
        $this->assertSame(["ROLE_USER", "ROLE_ADMIN"], $user->getRoles());
    }

}