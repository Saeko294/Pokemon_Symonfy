<?php

namespace App\DataFixtures;

use App\Entity\Ball;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class BallFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        foreach($this->ballData() as $item){
            $ball = new Ball();
            $ball
                ->setName($item['name'])
                ->setDescription($item['description'])


            ;

            $manager->persist($ball);


        }

        $manager->flush();
    }

    private function ballData() :array
    {

        return[
            [
                'name' => 'Poké ball',
                'description' => 'Lorem Ipsum',

            ],
            [
                'name' => 'Super ball',
                'description' => 'Lorem Ipsum',

            ],
            [
                'name' => 'Hyper ball',
                'description' => 'Lorem Ipsum',

            ],

        ];
    }
}
