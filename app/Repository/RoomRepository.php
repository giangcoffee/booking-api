<?php

namespace App\Repository;

use App\Room;

/**
 * Class RoomRepository
 *
 * @author Smartbox Web Team <si-web@smartbox.com>
 */
class RoomRepository extends AbstractRepository implements RepositoryInterface
{
    /**
     * RoomRepository constructor.
     *
     * @param Room $room
     */
    public function __construct(Room $room)
    {
        parent::__construct($room);
    }
}