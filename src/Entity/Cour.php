<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\CourRepository")
 */
class Cour
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $title_cour;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $illustration_cour;

    /**
     * @ORM\Column(type="datetime",)
     */
    private $creeation_date;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $description;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitleCour(): ?string
    {
        return $this->title_cour;
    }

    public function setTitleCour(string $title_cour): self
    {
        $this->title_cour = $title_cour;

        return $this;
    }

    public function getIllustrationCour(): ?string
    {
        return $this->illustration_cour;
    }

    public function setIllustrationCour(string $illustration_cour): self
    {
        $this->illustration_cour = $illustration_cour;

        return $this;
    }

    public function getCreeationDate(): ?\DateTimeInterface
    {
        return $this->creeation_date;
    }

    public function setCreeationDate(\DateTimeInterface $creeation_date): self
    {
        $this->creeation_date = $creeation_date;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }
}
