<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Ward
 *
 * @ORM\Table(name="ward", indexes={@ORM\Index(name="ward_district_districtid_fk", columns={"districtid"})})
 * @ORM\Entity
 */
class Ward
{
    /**
     * @var string
     *
     * @ORM\Column(name="wardid", type="string", length=20, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $wardid;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=191, nullable=false)
     */
    private $name;

    /**
     * @var \District
     *
     * @ORM\ManyToOne(targetEntity="District")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="districtid", referencedColumnName="districtid")
     * })
     */
    private $districtid;

    public function getWardid(): ?string
    {
        return $this->wardid;
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

    public function getDistrictid(): ?District
    {
        return $this->districtid;
    }

    public function setDistrictid(?District $districtid): self
    {
        $this->districtid = $districtid;

        return $this;
    }


}
