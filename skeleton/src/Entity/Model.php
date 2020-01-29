<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ModelRepository")
 */
class Model
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=45)
     */
    private $model_name;

    /**
     * @ORM\Column(type="date")
     */
    private $date_mise_circulation;

    /**
     * @ORM\Column(type="date")
     */
    private $date_lancement;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getModelName(): ?string
    {
        return $this->model_name;
    }

    public function setModelName(string $model_name): self
    {
        $this->model_name = $model_name;

        return $this;
    }

    public function getDateMiseCirculation(): ?\DateTimeInterface
    {
        return $this->date_mise_circulation;
    }

    public function setDateMiseCirculation(\DateTimeInterface $date_mise_circulation): self
    {
        $this->date_mise_circulation = $date_mise_circulation;

        return $this;
    }

    public function getDateLancement(): ?\DateTimeInterface
    {
        return $this->date_lancement;
    }

    public function setDateLancement(\DateTimeInterface $date_lancement): self
    {
        $this->date_lancement = $date_lancement;

        return $this;
    }
}
