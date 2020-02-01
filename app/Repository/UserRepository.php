<?php

namespace App\Repository;

use App\User;

/**
 * Class UserRepository
 *
 * @author Smartbox Web Team <si-web@smartbox.com>
 */
class UserRepository extends AbstractRepository implements RepositoryInterface
{
    /**
     * UserRepository constructor.
     *
     * @param User $user
     */
    public function __construct(User $user)
    {
        parent::__construct($user);
    }
}