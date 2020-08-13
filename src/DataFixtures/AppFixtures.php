<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use App\Entity\User;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $user = new User();
        $user->setEmail("yazidi.imran@gmail.com")
             ->setPassword("0000")
             ->setRoles(["ROLE_USER","ROLE_ADMIN"]);

        $manager->persist($user);

        $manager->flush();
    }
}
