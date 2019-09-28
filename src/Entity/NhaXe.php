<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * NhaXe
 *
 * @ORM\Table(name="nha_xe")
 * @ORM\Entity
 */
class NhaXe
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
     * @var string|null
     *
     * @ORM\Column(name="username", type="string", length=50, nullable=true)
     */
    private $username;

    /**
     * @var string|null
     *
     * @ORM\Column(name="password", type="string", length=100, nullable=true)
     */
    private $password;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=false)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="phone_1", type="string", length=20, nullable=false)
     */
    private $phone1;

    /**
     * @var string|null
     *
     * @ORM\Column(name="phone_2", type="string", length=20, nullable=true)
     */
    private $phone2;

    /**
     * @var string|null
     *
     * @ORM\Column(name="phone_3", type="string", length=20, nullable=true)
     */
    private $phone3;

    /**
     * @var string|null
     *
     * @ORM\Column(name="phone_4", type="string", length=20, nullable=true)
     */
    private $phone4;

    /**
     * @var string|null
     *
     * @ORM\Column(name="phone_5", type="string", length=20, nullable=true)
     */
    private $phone5;

    /**
     * @var string|null
     *
     * @ORM\Column(name="email_1", type="string", length=50, nullable=true)
     */
    private $email1;

    /**
     * @var string|null
     *
     * @ORM\Column(name="email_2", type="string", length=50, nullable=true)
     */
    private $email2;

    /**
     * @var string|null
     *
     * @ORM\Column(name="email_3", type="string", length=50, nullable=true)
     */
    private $email3;

    /**
     * @var string|null
     *
     * @ORM\Column(name="address1_province_id", type="string", length=20, nullable=true)
     */
    private $address1ProvinceId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="address1_district_id", type="string", length=20, nullable=true)
     */
    private $address1DistrictId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="address1_ward_id", type="string", length=20, nullable=true)
     */
    private $address1WardId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="address1_village_id", type="string", length=20, nullable=true)
     */
    private $address1VillageId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="address1_street", type="integer", nullable=true)
     */
    private $address1Street;

    /**
     * @var string|null
     *
     * @ORM\Column(name="address2_province_id", type="string", length=20, nullable=true)
     */
    private $address2ProvinceId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="address2_district_id", type="string", length=20, nullable=true)
     */
    private $address2DistrictId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="address2_ward_id", type="string", length=20, nullable=true)
     */
    private $address2WardId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="address2_village_id", type="string", length=20, nullable=true)
     */
    private $address2VillageId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="status", type="integer", nullable=true)
     */
    private $status;

    /**
     * @var int|null
     *
     * @ORM\Column(name="address2_street", type="integer", nullable=true)
     */
    private $address2Street;

    /**
     * @var int|null
     *
     * @ORM\Column(name="so_luong_xe", type="integer", nullable=true)
     */
    private $soLuongXe;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUsername(): ?string
    {
        return $this->username;
    }

    public function setUsername(?string $username): self
    {
        $this->username = $username;

        return $this;
    }

    public function getPassword(): ?string
    {
        return $this->password;
    }

    public function setPassword(?string $password): self
    {
        $this->password = $password;

        return $this;
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

    public function getPhone1(): ?string
    {
        return $this->phone1;
    }

    public function setPhone1(string $phone1): self
    {
        $this->phone1 = $phone1;

        return $this;
    }

    public function getPhone2(): ?string
    {
        return $this->phone2;
    }

    public function setPhone2(?string $phone2): self
    {
        $this->phone2 = $phone2;

        return $this;
    }

    public function getPhone3(): ?string
    {
        return $this->phone3;
    }

    public function setPhone3(?string $phone3): self
    {
        $this->phone3 = $phone3;

        return $this;
    }

    public function getPhone4(): ?string
    {
        return $this->phone4;
    }

    public function setPhone4(?string $phone4): self
    {
        $this->phone4 = $phone4;

        return $this;
    }

    public function getPhone5(): ?string
    {
        return $this->phone5;
    }

    public function setPhone5(?string $phone5): self
    {
        $this->phone5 = $phone5;

        return $this;
    }

    public function getEmail1(): ?string
    {
        return $this->email1;
    }

    public function setEmail1(?string $email1): self
    {
        $this->email1 = $email1;

        return $this;
    }

    public function getEmail2(): ?string
    {
        return $this->email2;
    }

    public function setEmail2(?string $email2): self
    {
        $this->email2 = $email2;

        return $this;
    }

    public function getEmail3(): ?string
    {
        return $this->email3;
    }

    public function setEmail3(?string $email3): self
    {
        $this->email3 = $email3;

        return $this;
    }

    public function getAddress1ProvinceId(): ?string
    {
        return $this->address1ProvinceId;
    }

    public function setAddress1ProvinceId(?string $address1ProvinceId): self
    {
        $this->address1ProvinceId = $address1ProvinceId;

        return $this;
    }

    public function getAddress1DistrictId(): ?string
    {
        return $this->address1DistrictId;
    }

    public function setAddress1DistrictId(?string $address1DistrictId): self
    {
        $this->address1DistrictId = $address1DistrictId;

        return $this;
    }

    public function getAddress1WardId(): ?string
    {
        return $this->address1WardId;
    }

    public function setAddress1WardId(?string $address1WardId): self
    {
        $this->address1WardId = $address1WardId;

        return $this;
    }

    public function getAddress1VillageId(): ?string
    {
        return $this->address1VillageId;
    }

    public function setAddress1VillageId(?string $address1VillageId): self
    {
        $this->address1VillageId = $address1VillageId;

        return $this;
    }

    public function getAddress1Street(): ?int
    {
        return $this->address1Street;
    }

    public function setAddress1Street(?int $address1Street): self
    {
        $this->address1Street = $address1Street;

        return $this;
    }

    public function getAddress2ProvinceId(): ?string
    {
        return $this->address2ProvinceId;
    }

    public function setAddress2ProvinceId(?string $address2ProvinceId): self
    {
        $this->address2ProvinceId = $address2ProvinceId;

        return $this;
    }

    public function getAddress2DistrictId(): ?string
    {
        return $this->address2DistrictId;
    }

    public function setAddress2DistrictId(?string $address2DistrictId): self
    {
        $this->address2DistrictId = $address2DistrictId;

        return $this;
    }

    public function getAddress2WardId(): ?string
    {
        return $this->address2WardId;
    }

    public function setAddress2WardId(?string $address2WardId): self
    {
        $this->address2WardId = $address2WardId;

        return $this;
    }

    public function getAddress2VillageId(): ?string
    {
        return $this->address2VillageId;
    }

    public function setAddress2VillageId(?string $address2VillageId): self
    {
        $this->address2VillageId = $address2VillageId;

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

    public function getAddress2Street(): ?int
    {
        return $this->address2Street;
    }

    public function setAddress2Street(?int $address2Street): self
    {
        $this->address2Street = $address2Street;

        return $this;
    }

    public function getSoLuongXe(): ?int
    {
        return $this->soLuongXe;
    }

    public function setSoLuongXe(?int $soLuongXe): self
    {
        $this->soLuongXe = $soLuongXe;

        return $this;
    }


}
