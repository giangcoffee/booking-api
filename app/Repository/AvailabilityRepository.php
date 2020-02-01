<?php

namespace App\Repository;

use App\Availability;

/**
 * Class AvailabilityRepository
 *
 * @author Smartbox Web Team <si-web@smartbox.com>
 */
class AvailabilityRepository extends AbstractRepository implements RepositoryInterface
{
    /**
     * AvailabilityRepository constructor.
     *
     * @param Availability $availability
     */
    public function __construct(Availability $availability)
    {
        parent::__construct($availability);
    }
}