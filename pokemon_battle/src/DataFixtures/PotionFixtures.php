<?php

namespace App\DataFixtures;

use App\Entity\Potion;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class PotionFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        foreach($this->potionData() as $item){
            $potion = new Potion();
            $potion
                ->setName($item['name'])
                ->setPower($item['power'])
                ->setDescription($item['description'])


            ;

            $manager->persist($potion);


        }

        $manager->flush();
    }

    private function potionData() :array
    {

        return[
            [
                'name' => 'Potion',
                'power' => '25',
                'description' => 'Lorem Ipsum',

            ],
            [
                'name' => 'Super Potion',
                'power' => '50',
                'description' => 'Lorem Ipsum',

            ],
            [
                'name' => 'Hyper Potion',
                'power' => '75',
                'description' => 'Lorem Ipsum',

            ],

        ];
    }
}
