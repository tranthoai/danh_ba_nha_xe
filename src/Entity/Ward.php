<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation\ApiResource;
use Symfony\Component\Serializer\Annotation\Groups;

/**
 * Ward.
 *
 * @ApiResource(
 *     normalizationContext={"groups"={"read"}},
 *     denormalizationContext={"groups"={"write"}}
 * )
 * @ORM\Table(name="ward", indexes={@ORM\Index(name="ward_district_districtid_fk", columns={"district_id"})})
 * @ORM\Entity
 */
class Ward
{
    /**
     * @var string
     *
     * @Groups({"read", "write"})
     * @ORM\Column(name="id", type="string", length=20, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @Groups({"read", "write"})
     * @ORM\Column(name="name", type="string", length=191, nullable=false)
     */
    private $name;

    /**
     * @var \District
     *
     * @ORM\ManyToOne(targetEntity="District")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="district_id", referencedColumnName="id")
     * })
     */
    private $district;

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
}
