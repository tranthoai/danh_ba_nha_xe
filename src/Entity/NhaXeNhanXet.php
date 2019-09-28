<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * NhaXeNhanXet
 *
 * @ORM\Table(name="nha_xe_nhan_xet")
 * @ORM\Entity
 */
class NhaXeNhanXet
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
     * @ORM\Column(name="user_id", type="integer", nullable=true)
     */
    private $userId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="nhan_xet_nha_xe", type="text", length=65535, nullable=true)
     */
    private $nhanXetNhaXe;

    /**
     * @var int|null
     *
     * @ORM\Column(name="status", type="integer", nullable=true)
     */
    private $status;

    /**
     * @var int|null
     *
     * @ORM\Column(name="description", type="integer", nullable=true)
     */
    private $description;

    /**
     * @var int|null
     *
     * @ORM\Column(name="xe_id", type="integer", nullable=true)
     */
    private $xeId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="nhan_xet_tai_xe", type="text", length=65535, nullable=true)
     */
    private $nhanXetTaiXe;

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

    public function getUserId(): ?int
    {
        return $this->userId;
    }

    public function setUserId(?int $userId): self
    {
        $this->userId = $userId;

        return $this;
    }

    public function getNhanXetNhaXe(): ?string
    {
        return $this->nhanXetNhaXe;
    }

    public function setNhanXetNhaXe(?string $nhanXetNhaXe): self
    {
        $this->nhanXetNhaXe = $nhanXetNhaXe;

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

    public function getDescription(): ?int
    {
        return $this->description;
    }

    public function setDescription(?int $description): self
    {
        $this->description = $description;

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

    public function getNhanXetTaiXe(): ?string
    {
        return $this->nhanXetTaiXe;
    }

    public function setNhanXetTaiXe(?string $nhanXetTaiXe): self
    {
        $this->nhanXetTaiXe = $nhanXetTaiXe;

        return $this;
    }


}
