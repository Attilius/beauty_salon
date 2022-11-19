<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Factory\UserFactory;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        UserFactory::createOne([
            'email' => 'webdev@gmail.com',
            'roles' => ["ROLE_ADMIN"],
            'firstName' => 'Admin',
            'lastName' => 'Test',
            'plainPassword' => 'admin',
        ]);
        UserFactory::createMany(4);

        $manager->flush();
    }
}
