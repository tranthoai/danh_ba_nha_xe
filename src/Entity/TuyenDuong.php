<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TuyenDuong
 *
 * @ORM\Table(name="tuyen_duong")
 * @ORM\Entity
 */
class TuyenDuong
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
     * @ORM\Column(name="start_province_id", type="integer", nullable=true)
     */
    private $startProvinceId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="start_district_id", type="integer", nullable=true)
     */
    private $startDistrictId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="start_ward_id", type="integer", nullable=true)
     */
    private $startWardId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="start_village_id", type="integer", nullable=true)
     */
    private $startVillageId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="end_province_id", type="integer", nullable=true)
     */
    private $endProvinceId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="end_district_id", type="integer", nullable=true)
     */
    private $endDistrictId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="end_ward_id", type="integer", nullable=true)
     */
    private $endWardId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="end_village_id", type="integer", nullable=true)
     */
    private $endVillageId;

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

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getStartProvinceId(): ?int
    {
        return $this->startProvinceId;
    }

    public function setStartProvinceId(?int $startProvinceId): self
    {
        $this->startProvinceId = $startProvinceId;

        return $this;
    }

    public function getStartDistrictId(): ?int
    {
        return $this->startDistrictId;
    }

    public function setStartDistrictId(?int $startDistrictId): self
    {
        $this->startDistrictId = $startDistrictId;

        return $this;
    }

    public function getStartWardId(): ?int
    {
        return $this->startWardId;
    }

    public function setStartWardId(?int $startWardId): self
    {
        $this->startWardId = $startWardId;

        return $this;
    }

    public function getStartVillageId(): ?int
    {
        return $this->startVillageId;
    }

    public function setStartVillageId(?int $startVillageId): self
    {
        $this->startVillageId = $startVillageId;

        return $this;
    }

    public function getEndProvinceId(): ?int
    {
        return $this->endProvinceId;
    }

    public function setEndProvinceId(?int $endProvinceId): self
    {
        $this->endProvinceId = $endProvinceId;

        return $this;
    }

    public function getEndDistrictId(): ?int
    {
        return $this->endDistrictId;
    }

    public function setEndDistrictId(?int $endDistrictId): self
    {
        $this->endDistrictId = $endDistrictId;

        return $this;
    }

    public function getEndWardId(): ?int
    {
        return $this->endWardId;
    }

    public function setEndWardId(?int $endWardId): self
    {
        $this->endWardId = $endWardId;

        return $this;
    }

    public function getEndVillageId(): ?int
    {
        return $this->endVillageId;
    }

    public function setEndVillageId(?int $endVillageId): self
    {
        $this->endVillageId = $endVillageId;

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


}
