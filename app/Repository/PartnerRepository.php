<?php

namespace App\Repository;

use App\Partner;

/**
 * Class PartnerRepository
 *
 * @author Smartbox Web Team <si-web@smartbox.com>
 */
class PartnerRepository extends AbstractRepository implements RepositoryInterface
{
    /**
     * PartnerRepository constructor.
     *
     * @param Partner $partner
     */
    public function __construct(Partner $partner)
    {
        parent::__construct($partner);
    }
}