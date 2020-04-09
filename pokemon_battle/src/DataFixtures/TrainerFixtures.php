<?php

namespace App\DataFixtures;

use App\Entity\Trainer;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class TrainerFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        foreach($this->trainerData() as $item){
            $trainer = new Trainer();
            $trainer
                ->setUsername($item['name'])
                ->setPassword($item['password'])
            ;

            $manager->persist($trainer);


        }

        $manager->flush();
    }

    private function trainerData() :array
    {

        return[
            [
                'name' => 'sosipopu',
                'password' => 'p@ssword',
            ],
        ];
    }
} 
