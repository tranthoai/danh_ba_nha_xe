<?php

namespace App\Entity;

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


}
