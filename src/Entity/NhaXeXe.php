<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * NhaXeXe
 *
 * @ORM\Table(name="nha_xe_xe")
 * @ORM\Entity
 */
class NhaXeXe
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
     * @ORM\Column(name="nha_xe_id", type="integer", nullable=true)
     */
    private $nhaXeId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="tuyen_duong_id", type="integer", nullable=true)
     */
    private $tuyenDuongId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="status", type="integer", nullable=true)
     */
    private $status;

    /**
     * @var string|null
     *
     * @ORM\Column(name="description", type="text", length=65535, nullable=true)
     */
    private $description;

    /**
     * @var int|null
     *
     * @ORM\Column(name="dich_vu_id", type="integer", nullable=true)
     */
    private $dichVuId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="xe_id", type="integer", nullable=true)
     */
    private $xeId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="price", type="integer", nullable=true)
     */
    private $price;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNhaXeId(): ?int
    {
        return $this->nhaXeId;
    }

    public function setNhaXeId(?int $nhaXeId): self
    {
        $this->nhaXeId = $nhaXeId;

        return $this;
    }

    public function getTuyenDuongId(): ?int
    {
        return $this->tuyenDuongId;
    }

    public function setTuyenDuongId(?int $tuyenDuongId): self
    {
        $this->tuyenDuongId = $tuyenDuongId;

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

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getDichVuId(): ?int
    {
        return $this->dichVuId;
    }

    public function setDichVuId(?int $dichVuId): self
    {
        $this->dichVuId = $dichVuId;

        return $this;
    }

    public function getXeId(): ?int
    {
        return $this->xeId;
    }

    public function setXeId(?int $xeId): self
    {
        $this->xeId = $xeId;

        return $this;
    }

    public function getPrice(): ?int
    {
        return $this->price;
    }

    public function setPrice(?int $price): self
    {
        $this->price = $price;

        return $this;
    }


}
