<?php

declare(strict_types=1);

namespace MJ\Component\Vehicle\Model;

use MJ\Component\Organization\Model\OrganizationInterface;

/**
 * @author Muhamad Surya Iksanudin <surya.iksanudin@gmail.com>
 */
interface VehicleInterface
{
    /**
     * @return null|string
     */
    public function getId(): ? string;

    /**
     * @return OrganizationInterface|null
     */
    public function getOrganization(): ? OrganizationInterface;

    /**
     * @param OrganizationInterface|null $organization
     */
    public function setOrganization(?OrganizationInterface $organization): void;

    /**
     * @return null|string
     */
    public function getPlateNumber(): ? string;

    /**
     * @return null|string
     */
    public function getDescription(): ? string;
}
