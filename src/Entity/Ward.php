<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Ward
 *
 * @ApiResource
 * @ORM\Table(name="ward", indexes={@ORM\Index(name="ward_district_district_id_fk", columns={"district_id"})})
 * @ORM\Entity(repositoryClass="App\Repository\WardRepository")
 */
class Ward
{
    /**
     * @var string
     *
     * @ORM\Column(name="id", type="string", length=20, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=191, nullable=false)
     */
    private $name;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\District", inversedBy="wards")
     * @ORM\JoinColumn(nullable=false)
     */
    private $district;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Village", mappedBy="ward")
     */
    private $villages;

    public function __construct()
    {
        $this->villages = new ArrayCollection();
    }

    public function __toString()
    {

        return $this->getName();

    }

    public function getId(): ?string
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

    public function getDistrict(): ?District
    {
        return $this->district;
    }

    public function setDistrict(?District $district): self
    {
        $this->district = $district;

        return $this;
    }

    /**
     * @return Collection|Village[]
     */
    public function getVillages(): Collection
    {
        return $this->villages;
    }

    public function addVillage(Village $village): self
    {
        if (!$this->villages->contains($village)) {
            $this->villages[] = $village;
            $village->setWard($this);
        }

        return $this;
    }

    public function removeVillage(Village $village): self
    {
        if ($this->villages->contains($village)) {
            $this->villages->removeElement($village);
            // set the owning side to null (unless already changed)
            if ($village->getWard() === $this) {
                $village->setWard(null);
            }
        }

        return $this;
    }


}
