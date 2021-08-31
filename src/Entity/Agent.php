<?php

namespace App\Entity;

use App\Repository\AgentRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=AgentRepository::class)
 */
class Agent
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
     * @ORM\Column(type="date")
     */
    private $dob;

    /**
     * @ORM\Column(type="integer")
     */
    private $id_code;

    /**
     * @ORM\ManyToOne(targetEntity=Country::class, inversedBy="agents")
     * @ORM\JoinColumn(nullable=false)
     */
    private $nationality;

    /**
     * @ORM\ManyToMany(targetEntity=Specialty::class, inversedBy="agents")
     */
    private $specialty;

    /**
     * @ORM\ManyToOne(targetEntity=Mission::class, inversedBy="agent")
     * @ORM\JoinColumn(nullable=false)
     */
    private $current_mission;

    public function __construct()
    {
        $this->specialty = new ArrayCollection();
    }

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

    public function getDob(): ?\DateTimeInterface
    {
        return $this->dob;
    }

    public function setDob(\DateTimeInterface $dob): self
    {
        $this->dob = $dob;

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

    /**
     * @return Collection|specialty[]
     */
    public function getSpecialty(): Collection
    {
        return $this->specialty;
    }

    public function addSpecialty(specialty $specialty): self
    {
        if (!$this->specialty->contains($specialty)) {
            $this->specialty[] = $specialty;
        }

        return $this;
    }

    public function removeSpecialty(specialty $specialty): self
    {
        $this->specialty->removeElement($specialty);

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
