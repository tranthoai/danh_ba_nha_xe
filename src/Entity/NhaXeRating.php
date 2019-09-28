<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * NhaXeRating
 *
 * @ORM\Table(name="nha_xe_rating")
 * @ORM\Entity
 */
class NhaXeRating
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
     * @ORM\Column(name="rating_id", type="integer", nullable=true)
     */
    private $ratingId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="user_id", type="integer", nullable=true)
     */
    private $userId;

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
     * @ORM\Column(name="nha_xe_id", type="integer", nullable=true)
     */
    private $nhaXeId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="rating_value", type="integer", nullable=true)
     */
    private $ratingValue;

    /**
     * @var int|null
     *
     * @ORM\Column(name="xe_id", type="integer", nullable=true)
     */
    private $xeId;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getRatingId(): ?int
    {
        return $this->ratingId;
    }

    public function setRatingId(?int $ratingId): self
    {
        $this->ratingId = $ratingId;

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

    public function getNhaXeId(): ?int
    {
        return $this->nhaXeId;
    }

    public function setNhaXeId(?int $nhaXeId): self
    {
        $this->nhaXeId = $nhaXeId;

        return $this;
    }

    public function getRatingValue(): ?int
    {
        return $this->ratingValue;
    }

    public function setRatingValue(?int $ratingValue): self
    {
        $this->ratingValue = $ratingValue;

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


}
