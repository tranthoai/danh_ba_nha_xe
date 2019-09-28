<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation\ApiResource;
use Symfony\Component\Serializer\Annotation\Groups;

/**
 * NhaXe.
 *
 * @ApiResource(
 *     normalizationContext={"groups"={"read"}},
 *     denormalizationContext={"groups"={"write"}}
 * )
 * @ORM\Table(name="nha_xe", indexes={@ORM\Index(name="nha_xe_province_id_fk_2", columns={"address2_province_id"}), @ORM\Index(name="nha_xe_village_id_fk_2", columns={"address2_village_id"}), @ORM\Index(name="nha_xe_ward_id_fk_2", columns={"address2_ward_id"}), @ORM\Index(name="nha_xe_district_id_fk", columns={"address1_district_id"}), @ORM\Index(name="nha_xe_district_id_fk_2", columns={"address2_district_id"}), @ORM\Index(name="nha_xe_village_id_fk", columns={"address1_village_id"}), @ORM\Index(name="nha_xe_ward_id_fk", columns={"address1_ward_id"}), @ORM\Index(name="nha_xe_province_id_fk", columns={"address1_province_id"})})
 * @ORM\Entity
 */
class NhaXe
{
    /**
     * @var int
     *
     * @Groups({"read", "write"})
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
     * @Groups({"read", "write"})
     * @ORM\Column(name="name", type="string", length=255, nullable=false)
     */
    private $name;

    /**
     * @var string
     *
     * @Groups({"read", "write"})
     * @ORM\Column(name="phone_1", type="string", length=20, nullable=false)
     */
    private $phone1;

    /**
     * @var string|null
     *
     * @Groups({"read", "write"})
     * @ORM\Column(name="phone_2", type="string", length=20, nullable=true)
     */
    private $phone2;

    /**
     * @var string|null
     *
     * @Groups({"read", "write"})
     * @ORM\Column(name="phone_3", type="string", length=20, nullable=true)
     */
    private $phone3;

    /**
     * @var string|null
     *
     * @Groups({"read", "write"})
     * @ORM\Column(name="phone_4", type="string", length=20, nullable=true)
     */
    private $phone4;

    /**
     * @var string|null
     *
     * @Groups({"read", "write"})
     * @ORM\Column(name="phone_5", type="string", length=20, nullable=true)
     */
    private $phone5;

    /**
     * @var string|null
     *
     * @Groups({"read", "write"})
     * @ORM\Column(name="email_1", type="string", length=50, nullable=true)
     */
    private $email1;

    /**
     * @var string|null
     *
     * @Groups({"read", "write"})
     * @ORM\Column(name="email_2", type="string", length=50, nullable=true)
     */
    private $email2;

    /**
     * @var string|null
     *
     * @Groups({"read", "write"})
     * @ORM\Column(name="email_3", type="string", length=50, nullable=true)
     */
    private $email3;

    /**
     * @var int|null
     *
     * @Groups({"read", "write"})
     * @ORM\Column(name="status", type="integer", nullable=true)
     */
    private $status;

    /**
     * @var int|null
     *
     * @Groups({"read", "write"})
     * @ORM\Column(name="so_luong_xe", type="integer", nullable=true)
     */
    private $soLuongXe;

    /**
     * @var \District
     *
     * @Groups({"read", "write"})
     * @ORM\ManyToOne(targetEntity="District")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="address1_district_id", referencedColumnName="id")
     * })
     */
    private $address1District;

    /**
     * @var \District
     *
     * @Groups({"read", "write"})
     * @ORM\ManyToOne(targetEntity="District")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="address2_district_id", referencedColumnName="id")
     * })
     */
    private $address2District;

    /**
     * @var \Province
     *
     * @Groups({"read", "write"})
     * @ORM\ManyToOne(targetEntity="Province")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="address1_province_id", referencedColumnName="id")
     * })
     */
    private $address1Province;

    /**
     * @var \Province
     *
     * @Groups({"read", "write"})
     * @ORM\ManyToOne(targetEntity="Province")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="address2_province_id", referencedColumnName="id")
     * })
     */
    private $address2Province;

    /**
     * @var \Village
     *
     * @Groups({"read", "write"})
     * @ORM\ManyToOne(targetEntity="Village")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="address1_village_id", referencedColumnName="id")
     * })
     */
    private $address1Village;

    /**
     * @var \Village
     *
     * @ORM\ManyToOne(targetEntity="Village")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="address2_village_id", referencedColumnName="id")
     * })
     */
    private $address2Village;

    /**
     * @var \Ward
     *
     * @Groups({"read", "write"})
     * @Groups({"read", "write"})
     * @ORM\ManyToOne(targetEntity="Ward")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="address1_ward_id", referencedColumnName="id")
     * })
     */
    private $address1Ward;

    /**
     * @var \Ward
     *
     * @Groups({"read", "write"})
     * @ORM\ManyToOne(targetEntity="Ward")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="address2_ward_id", referencedColumnName="id")
     * })
     */
    private $address2Ward;

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

    public function getStatus(): ?int
    {
        return $this->status;
    }

    public function setStatus(?int $status): self
    {
        $this->status = $status;

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

    public function getAddress1District(): ?District
    {
        return $this->address1District;
    }

    public function setAddress1District(?District $address1District): self
    {
        $this->address1District = $address1District;

        return $this;
    }

    public function getAddress2District(): ?District
    {
        return $this->address2District;
    }

    public function setAddress2District(?District $address2District): self
    {
        $this->address2District = $address2District;

        return $this;
    }

    public function getAddress1Province(): ?Province
    {
        return $this->address1Province;
    }

    public function setAddress1Province(?Province $address1Province): self
    {
        $this->address1Province = $address1Province;

        return $this;
    }

    public function getAddress2Province(): ?Province
    {
        return $this->address2Province;
    }

    public function setAddress2Province(?Province $address2Province): self
    {
        $this->address2Province = $address2Province;

        return $this;
    }

    public function getAddress1Village(): ?Village
    {
        return $this->address1Village;
    }

    public function setAddress1Village(?Village $address1Village): self
    {
        $this->address1Village = $address1Village;

        return $this;
    }

    public function getAddress2Village(): ?Village
    {
        return $this->address2Village;
    }

    public function setAddress2Village(?Village $address2Village): self
    {
        $this->address2Village = $address2Village;

        return $this;
    }

    public function getAddress1Ward(): ?Ward
    {
        return $this->address1Ward;
    }

    public function setAddress1Ward(?Ward $address1Ward): self
    {
        $this->address1Ward = $address1Ward;

        return $this;
    }

    public function getAddress2Ward(): ?Ward
    {
        return $this->address2Ward;
    }

    public function setAddress2Ward(?Ward $address2Ward): self
    {
        $this->address2Ward = $address2Ward;

        return $this;
    }
}
