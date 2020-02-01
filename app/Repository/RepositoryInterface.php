<?php

namespace App\Repository;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class RepositoryInterface
 *
 * @author Smartbox Web Team <si-web@smartbox.com>
 */
interface RepositoryInterface
{
    /**
     * @return Collection|Model[]
     */
    public function all(): Collection;

    /**
     * @param array $data
     *
     * @return Model
     */
    public function create(array $data): Model;

    /**
     * @param array $data
     * @param $id
     *
     * @return Model
     */
    public function update(array $data, $id): Model;

    public function delete($id);

    public function show($id);

    /**
     * @return Model
     */
    public function getModel(): Model;
}