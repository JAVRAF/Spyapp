<?php

namespace App\Entity;

use App\Repository\MissionRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=MissionRepository::class)
 */
class Mission
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
    private $title;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $description;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $codename;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $type;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $status;

    /**
     * @ORM\ManyToOne(targetEntity=Specialty::class, inversedBy="missions")
     * @ORM\JoinColumn(nullable=false)
     */
    private $required_specialty;

    /**
     * @ORM\ManyToOne(targetEntity=Country::class, inversedBy="missions")
     * @ORM\JoinColumn(nullable=false)
     */
    private $country;

    /**
     * @ORM\OneToMany(targetEntity=Hideout::class, mappedBy="mission")
     */
    private $hideout;

    /**
     * @ORM\OneToMany(targetEntity=Asset::class, mappedBy="current_mission")
     */
    private $asset;

    /**
     * @ORM\OneToMany(targetEntity=Target::class, mappedBy="mission")
     */
    private $target;

    /**
     * @ORM\OneToMany(targetEntity=Agent::class, mappedBy="current_mission")
     */
    private $agent;

    /**
     * @ORM\Column(type="date")
     */
    private $begin_date;

    /**
     * @ORM\Column(type="date")
     */
    private $end_date;

    public function __construct()
    {
        $this->hideout = new ArrayCollection();
        $this->asset = new ArrayCollection();
        $this->target = new ArrayCollection();
        $this->agent = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): self
    {
        $this->title = $title;

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

    public function getCodename(): ?string
    {
        return $this->codename;
    }

    public function setCodename(string $codename): self
    {
        $this->codename = $codename;

        return $this;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(string $type): self
    {
        $this->type = $type;

        return $this;
    }

    public function getStatus(): ?string
    {
        return $this->status;
    }

    public function setStatus(string $status): self
    {
        $this->status = $status;

        return $this;
    }

    public function getRequiredSpecialty(): ?specialty
    {
        return $this->required_specialty;
    }

    public function setRequiredSpecialty(?specialty $required_specialty): self
    {
        $this->required_specialty = $required_specialty;

        return $this;
    }

    public function getCountry(): ?country
    {
        return $this->country;
    }

    public function setCountry(?country $country): self
    {
        $this->country = $country;

        return $this;
    }

    /**
     * @return Collection|hideout[]
     */
    public function getHideout(): Collection
    {
        return $this->hideout;
    }

    public function addHideout(hideout $hideout): self
    {
        if (!$this->hideout->contains($hideout)) {
            $this->hideout[] = $hideout;
            $hideout->setMission($this);
        }

        return $this;
    }

    public function removeHideout(hideout $hideout): self
    {
        if ($this->hideout->removeElement($hideout)) {
            // set the owning side to null (unless already changed)
            if ($hideout->getMission() === $this) {
                $hideout->setMission(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|asset[]
     */
    public function getAsset(): Collection
    {
        return $this->asset;
    }

    public function addAsset(asset $asset): self
    {
        if (!$this->asset->contains($asset)) {
            $this->asset[] = $asset;
            $asset->setCurrentMission($this);
        }

        return $this;
    }

    public function removeAsset(asset $asset): self
    {
        if ($this->asset->removeElement($asset)) {
            // set the owning side to null (unless already changed)
            if ($asset->getCurrentMission() === $this) {
                $asset->setCurrentMission(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|target[]
     */
    public function getTarget(): Collection
    {
        return $this->target;
    }

    public function addTarget(target $target): self
    {
        if (!$this->target->contains($target)) {
            $this->target[] = $target;
            $target->setMission($this);
        }

        return $this;
    }

    public function removeTarget(target $target): self
    {
        if ($this->target->removeElement($target)) {
            // set the owning side to null (unless already changed)
            if ($target->getMission() === $this) {
                $target->setMission(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|agent[]
     */
    public function getAgent(): Collection
    {
        return $this->agent;
    }

    public function addAgent(agent $agent): self
    {
        if (!$this->agent->contains($agent)) {
            $this->agent[] = $agent;
            $agent->setCurrentMission($this);
        }

        return $this;
    }

    public function removeAgent(agent $agent): self
    {
        if ($this->agent->removeElement($agent)) {
            // set the owning side to null (unless already changed)
            if ($agent->getCurrentMission() === $this) {
                $agent->setCurrentMission(null);
            }
        }

        return $this;
    }

    public function getBeginDate(): ?\DateTimeInterface
    {
        return $this->begin_date;
    }

    public function setBeginDate(\DateTimeInterface $begin_date): self
    {
        $this->begin_date = $begin_date;

        return $this;
    }

    public function getEndDate(): ?\DateTimeInterface
    {
        return $this->end_date;
    }

    public function setEndDate(\DateTimeInterface $end_date): self
    {
        $this->end_date = $end_date;

        return $this;
    }
}
