<?php

declare(strict_types=1);

namespace MJ\Component\Vehicle\Model;

use ApiPlatform\Core\Annotation\ApiResource;
use MJ\Component\Organization\Model\OrganizationInterface;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Serializer\Annotation\Groups;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity()
 * @ORM\Table(name="vehicles")
 *
 * @ApiResource(
 *     attributes={
 *         "normalization_context"={"groups"={"read"}},
 *         "denormalization_context"={"groups"={"write"}}
 *     }
 * )
 *
 * @UniqueEntity("plateNumber")
 *
 * @author Muhamad Surya Iksanudin <surya.iksanudin@gmail.com>
 */
class Vehicle implements VehicleInterface
{
    /**
     * @Groups({"read"})
     *
     * @ORM\Id()
     * @ORM\GeneratedValue(strategy="UUID")
     * @ORM\Column(type="guid")
     *
     * @var string
     */
    private $id;

    /**
     * @Groups({"write", "read"})
     *
     * @ORM\ManyToOne(targetEntity="MJ\Component\Organization\Model\Organization", fetch="EAGER")
     * @ORM\JoinColumn(name="region_id", referencedColumnName="id")
     *
     * @Assert\NotBlank()
     *
     * @var OrganizationInterface
     */

    private $organization;

    /**
     * @Groups({"read", "write"})
     *
     * @ORM\Column(type="string", length=7)
     *
     * @Assert\Length(max=7)
     * @Assert\NotBlank()
     *
     * @var string
     */
    private $plateNumber;

    /**
     * @Groups({"read", "write"})
     *
     * @ORM\Column(type="string")
     *
     * @var string
     */
    private $description;

    /**
     * @return null|string
     */
    public function getId(): ? string
    {
        return $this->id;
    }

    /**
     * @return OrganizationInterface|null
     */
    public function getOrganization(): ? OrganizationInterface
    {
        return $this->organization;
    }

    /**
     * @param OrganizationInterface|null $organization
     */
    public function setOrganization(?OrganizationInterface $organization): void
    {
        $this->organization = $organization;
    }

    /**
     * @return null|string
     */
    public function getPlateNumber(): ? string
    {
        return $this->plateNumber;
    }

    /**
     * @param string $plateNumber
     */
    public function setPlateNumber(string $plateNumber): void
    {
        $this->plateNumber = $plateNumber;
    }

    /**
     * @return null|string
     */
    public function getDescription(): ? string
    {
        return $this->description;
    }

    /**
     * @param string $description
     */
    public function setDescription(string $description): void
    {
        $this->description = $description;
    }
}
