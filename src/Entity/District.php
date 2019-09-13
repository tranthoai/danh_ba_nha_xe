<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * District
 *
 * @ORM\Table(name="district", indexes={@ORM\Index(name="district_province_provinceid_fk", columns={"provinceid"})})
 * @ORM\Entity
 */
class District
{
    /**
     * @var string
     *
     * @ORM\Column(name="districtid", type="string", length=20, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $districtid;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=191, nullable=false)
     */
    private $name;

    /**
     * @var \Province
     *
     * @ORM\ManyToOne(targetEntity="Province")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="provinceid", referencedColumnName="provinceid")
     * })
     */
    private $provinceid;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Province", inversedBy="districts")
     * @ORM\JoinColumn(nullable=false)
     */
    private $province;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Ward", mappedBy="district")
     */
    private $wards;

    public function __construct()
    {
        $this->wards = new ArrayCollection();
    }

    public function getDistrictid(): ?string
    {
        return $this->districtid;
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

    public function getProvinceid(): ?Province
    {
        return $this->provinceid;
    }

    public function setProvinceid(?Province $provinceid): self
    {
        $this->provinceid = $provinceid;

        return $this;
    }

    public function getProvince(): ?Province
    {
        return $this->province;
    }

    public function setProvince(?Province $province): self
    {
        $this->province = $province;

        return $this;
    }

    /**
     * @return Collection|Ward[]
     */
    public function getWards(): Collection
    {
        return $this->wards;
    }

    public function addWard(Ward $ward): self
    {
        if (!$this->wards->contains($ward)) {
            $this->wards[] = $ward;
            $ward->setDistrict($this);
        }

        return $this;
    }

    public function removeWard(Ward $ward): self
    {
        if ($this->wards->contains($ward)) {
            $this->wards->removeElement($ward);
            // set the owning side to null (unless already changed)
            if ($ward->getDistrict() === $this) {
                $ward->setDistrict(null);
            }
        }

        return $this;
    }


}
