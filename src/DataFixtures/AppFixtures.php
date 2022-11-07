<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Faker\Factory;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        // $product = new Product();
        // $manager->persist($product);

        $faker = Factory::create('fr_FR');

        $user = new User();
        $user ->setEmail('user@test.com')
              ->setPrenom($faker->firstName())
              ->setNom($faker->lastName())
              ->setTelephone($faker->phoneNumber())
              ->setAPropos($faker->text())
              ->setInstagram('instagram')
              ->setRoles('ROLES_PEINTRE');

        $password = $this->encoder->encodePassword($user,'password');
        $user->setPassword($password);

        $manager->persist($user);
    }
}
