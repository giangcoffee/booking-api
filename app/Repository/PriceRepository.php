<?php

namespace App\Repository;

use App\Price;

/**
 * Class PriceRepository
 *
 * @author Smartbox Web Team <si-web@smartbox.com>
 */
class PriceRepository extends AbstractRepository implements RepositoryInterface
{
    /**
     * PriceRepository constructor.
     *
     * @param Price $price
     */
    public function __construct(Price $price)
    {
        parent::__construct($price);
    }
}