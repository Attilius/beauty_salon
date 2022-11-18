<?php

namespace App\Tests\Entity;

use App\Entity\User;
use PHPUnit\Framework\TestCase;

class UserTest extends TestCase
{
    public function test_setting_email()
    {
        $user = new User();

        $this->assertNull($user->getEmail());

        $user->setEmail("example@test.com");
        $this->assertSame("example@test.com", $user->getEmail());
    }

    public function test_setting_roles()
    {
        $user = new User();

        $this->assertSame(["ROLE_USER"], $user->getRoles());

        $user->setRoles(["ROLE_ADMIN"]);
        $this->assertSame(["ROLE_ADMIN", "ROLE_USER"], $user->getRoles());
    }

    public function test_getting_role_return_array_with_unique_items()
    {
        $user = new User();

        $this->assertSame(["ROLE_USER"], $user->getRoles());

        $user->setRoles(["ROLE_USER","ROLE_ADMIN","ROLE_ADMIN"]);
        $this->assertSame(["ROLE_USER", "ROLE_ADMIN"], $user->getRoles());
    }

    public function test_setting_first_name()
    {
        $user = new User();

        $this->assertNull($user->getFirstName());

        $user->setFirstName("John");
        $this->assertSame("John", $user->getFirstName());
    }

    public function test_setting_last_name()
    {
        $user = new User();

        $this->assertNull($user->getLastName());

        $user->setLastName("Doe");
        $this->assertSame("Doe", $user->getLastName());
    }
}