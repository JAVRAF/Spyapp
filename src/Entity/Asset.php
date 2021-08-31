<?php

namespace App\Entity;

use App\Repository\AssetRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=AssetRepository::class)
 */
class Asset
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $name;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $surname;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $date;

    /**
     * @ORM\Column(type="integer")
     */
    private $id_code;

    /**
     * @ORM\ManyToOne(targetEntity=Country::class, inversedBy="assets")
     */
    private $nationality;

    /**
     * @ORM\ManyToOne(targetEntity=Mission::class, inversedBy="asset")
     * @ORM\JoinColumn(nullable=false)
     */
    private $current_mission;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getSurname(): ?string
    {
        return $this->surname;
    }

    public function setSurname(string $surname): self
    {
        $this->surname = $surname;

        return $this;
    }

    public function getDate(): ?string
    {
        return $this->date;
    }

    public function setDate(string $date): self
    {
        $this->date = $date;

        return $this;
    }

    public function getIdCode(): ?int
    {
        return $this->id_code;
    }

    public function setIdCode(int $id_code): self
    {
        $this->id_code = $id_code;

        return $this;
    }

    public function getNationality(): ?country
    {
        return $this->nationality;
    }

    public function setNationality(?country $nationality): self
    {
        $this->nationality = $nationality;

        return $this;
    }

    public function getCurrentMission(): ?Mission
    {
        return $this->current_mission;
    }

    public function setCurrentMission(?Mission $current_mission): self
    {
        $this->current_mission = $current_mission;

        return $this;
    }
}
