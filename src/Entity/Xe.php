<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Xe
 *
 * @ORM\Table(name="xe")
 * @ORM\Entity
 */
class Xe
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
     * @ORM\Column(name="loai_xe_id", type="integer", nullable=true)
     */
    private $loaiXeId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="tai_xe", type="string", length=50, nullable=true)
     */
    private $taiXe;

    /**
     * @var int|null
     *
     * @ORM\Column(name="status", type="integer", nullable=true)
     */
    private $status;

    /**
     * @var string|null
     *
     * @ORM\Column(name="desciption", type="text", length=65535, nullable=true)
     */
    private $desciption;

    /**
     * @var string|null
     *
     * @ORM\Column(name="bien_so", type="string", length=50, nullable=true)
     */
    private $bienSo;

    /**
     * @var string|null
     *
     * @ORM\Column(name="name", type="string", length=50, nullable=true)
     */
    private $name;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLoaiXeId(): ?int
    {
        return $this->loaiXeId;
    }

    public function setLoaiXeId(?int $loaiXeId): self
    {
        $this->loaiXeId = $loaiXeId;

        return $this;
    }

    public function getTaiXe(): ?string
    {
        return $this->taiXe;
    }

    public function setTaiXe(?string $taiXe): self
    {
        $this->taiXe = $taiXe;

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

    public function getDesciption(): ?string
    {
        return $this->desciption;
    }

    public function setDesciption(?string $desciption): self
    {
        $this->desciption = $desciption;

        return $this;
    }

    public function getBienSo(): ?string
    {
        return $this->bienSo;
    }

    public function setBienSo(?string $bienSo): self
    {
        $this->bienSo = $bienSo;

        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): self
    {
        $this->name = $name;

        return $this;
    }


}
