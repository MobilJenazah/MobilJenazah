<?php

declare(strict_types=1);

namespace MJ\Component\Organization\Model;

/**
 * @author Muhamad Surya Iksanudin <surya.iksanudin@gmail.com>
 */
interface OrganizationInterface
{
    /**
     * @return null|string
     */
    public function getId(): ? string;

    /**
     * @return null|string
     */
    public function getCode(): ? string;

    /**
     * @return null|string
     */
    public function getName(): ? string;

    /**
     * @return null|string
     */
    public function getDescription(): ? string;
}
