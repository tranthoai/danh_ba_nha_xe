<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Village
 *
 * @ORM\Table(name="village", indexes={@ORM\Index(name="village_ward_wardid_fk", columns={"wardid"})})
 * @ORM\Entity
 */
class Village
{
    /**
     * @var string
     *
     * @ORM\Column(name="villageid", type="string", length=20, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $villageid;

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
     *   @ORM\JoinColumn(name="wardid", referencedColumnName="wardid")
     * })
     */
    private $wardid;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Ward", inversedBy="villages")
     * @ORM\JoinColumn(nullable=false)
     */
    private $ward;

    public function getVillageid(): ?string
    {
        return $this->villageid;
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

    public function getWardid(): ?Ward
    {
        return $this->wardid;
    }

    public function setWardid(?Ward $wardid): self
    {
        $this->wardid = $wardid;

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
