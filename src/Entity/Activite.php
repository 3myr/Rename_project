<?php

namespace App\Entity;

use App\Tools\AutoIncrement;
use App\Tools\Singleton;
use JsonSerializable;

/**
 * @ORM\Entity(repositoryClass=ActiviteRepository::class)
 *
*/
class Activite implements JsonSerializable
{
    /**
     * @var int
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nom;

    /**
     * @ORM\Column(type="time")
     */
    private $duree;

    /**
     * @ORM\Column(type="float")
     */
    private $met;

    public function __construct(int $id)
    {
        $this->id = $id;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getDuree(): ?\DateTimeInterface
    {
        return $this->duree;
    }

    public function setDuree(\DateTimeInterface $duree): self
    {
        $this->duree = $duree;

        return $this;
    }

    public function getMet(): ?float
    {
        return $this->met;
    }

    public function setMet(float $met): self
    {
        $this->met = $met;

        return $this;
    }

    public function jsonSerialize()
    {
        return
            [
                'id'   => $this->getId(),
                'nom' => $this->getNom(),
                'duree' => $this->getDuree()->format('H:i'),
                'met' => $this->getMet()
            ];
    }
}
