<?php

namespace App\Repository;

use App\Booking;

/**
 * Class BookingRepository
 *
 * @author Smartbox Web Team <si-web@smartbox.com>
 */
class BookingRepository extends AbstractRepository implements RepositoryInterface
{
    /**
     * BookingRepository constructor.
     *
     * @param Booking $booking
     */
    public function __construct(Booking $booking)
    {
        parent::__construct($booking);
    }
}