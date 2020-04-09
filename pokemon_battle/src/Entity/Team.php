<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\TeamRepository")
 */
class Team
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Pokemon")
     * @ORM\JoinColumn(nullable=false)
     */
    private $Pokemon;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Trainer")
     * @ORM\JoinColumn(nullable=false)
     */
    private $Trainer;

    /**
     * @ORM\Column(type="string", length=200)
     */
    private $NickName;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPokemon(): ?Pokemon
    {
        return $this->Pokemon;
    }

    public function setPokemon(?Pokemon $Pokemon): self
    {
        $this->Pokemon = $Pokemon;

        return $this;
    }

    public function getTrainer(): ?Trainer
    {
        return $this->Trainer;
    }

    public function setTrainer(?Trainer $Trainer): self
    {
        $this->Trainer = $Trainer;

        return $this;
    }

    public function getNickName(): ?string
    {
        return $this->NickName;
    }

    public function setNickName(string $NickName): self
    {
        $this->NickName = $NickName;

        return $this;
    }
}
