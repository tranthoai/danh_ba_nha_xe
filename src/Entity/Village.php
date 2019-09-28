<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation\ApiResource;

/**
 * Village.
 *
 * @ApiResource
 * @ORM\Table(name="village", indexes={@ORM\Index(name="village_ward_wardid_fk", columns={"ward_id"})})
 * @ORM\Entity
 */
class Village
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
     * @var \Ward
     *
     * @ORM\ManyToOne(targetEntity="Ward")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ward_id", referencedColumnName="id")
     * })
     */
    private $ward;

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

    public function getWard(): ?Ward
    {
        return $this->ward;
    }

    public function setWard(?Ward $ward): self
    {
        $this->ward = $ward;

        return $this;
    }
}
