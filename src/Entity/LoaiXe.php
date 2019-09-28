<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LoaiXe
 *
 * @ORM\Table(name="loai_xe")
 * @ORM\Entity
 */
class LoaiXe
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var int|null
     *
     * @ORM\Column(name="ten_xe", type="integer", nullable=true)
     */
    private $tenXe;

    /**
     * @var string|null
     *
     * @ORM\Column(name="description", type="text", length=65535, nullable=true)
     */
    private $description;

    /**
     * @var int|null
     *
     * @ORM\Column(name="status", type="integer", nullable=true)
     */
    private $status;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTenXe(): ?int
    {
        return $this->tenXe;
    }

    public function setTenXe(?int $tenXe): self
    {
        $this->tenXe = $tenXe;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getStatus(): ?int
    {
        return $this->status;
    }

    public function setStatus(?int $status): self
    {
        $this->status = $status;

        return $this;
    }


}
