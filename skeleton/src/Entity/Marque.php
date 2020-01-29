<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\MarqueRepository")
 */
class Marque
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=20)
     */
    private $marque_name;

    /**
     * @ORM\Column(type="string", length=20)
     */
    private $country;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getMarqueName(): ?string
    {
        return $this->marque_name;
    }

    public function setMarqueName(string $marque_name): self
    {
        $this->marque_name = $marque_name;

        return $this;
    }

    public function getCountry(): ?string
    {
        return $this->country;
    }

    public function setCountry(string $country): self
    {
        $this->country = $country;

        return $this;
    }
}
