<?php

namespace App\DataFixtures;

use App\Entity\Pokemon;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class PokemonFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        foreach($this->pokemonData() as $item){
            $pokemon = new Pokemon();
            $pokemon
                ->setName($item['name'])
                ->setHp($item['hp'])
                ->setNature($item['nature'])
                ->setType($item['type'])
                ->setDescription($item['description'])


            ;

            $manager->persist($pokemon);


        }

        $manager->flush();
    }

    private function pokemonData() :array
    {

        return[
            [
                'name' => 'Salamèche',
                'hp' => '50',
                'nature' => 'Timide',
                'type' => '1',
                'description' => 'Lorem Ipsum',

            ],
            [
                'name' => 'Carapuce',
                'hp' => '50',
                'nature' => 'Jovial',
                'type' => '2',
                'description' => 'Lorem Ipsum',

            ],
            [
                'name' => 'Bulbizarre',
                'hp' => '50',
                'nature' => 'Peureux',
                'type' => '3',
                'description' => 'Lorem Ipsum',

            ],
        ];
    }
}