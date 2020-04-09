<?php

namespace App\DataFixtures;

use App\Entity\Attack;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AttackFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        foreach($this->attackData() as $item){
            $attack = new Attack();
            $attack
                ->setName($item['name'])
                ->setPower($item['power'])
                ->setType($item['type'])
                ->setDescription($item['description'])


            ;

            $manager->persist($attack);
            
            $this->addReference($item['name'], $attack);


        }

        $manager->flush();
    }

    private function attackData() :array
    {

        return[
            [
                'name' => 'Flammèche',
                'power' => '50',
                'type' => '1',
                'description' => 'Lorem Ipsum',

            ],
            [
                'name' => 'Pistolet à O',
                'power' => '50',
                'type' => '2',
                'description' => 'Lorem Ipsum',

            ],
            [
                'name' => 'Fouet-lianes',
                'power' => '50',
                'type' => '3',
                'description' => 'Lorem Ipsum',

            ],

        ];
    }
}
