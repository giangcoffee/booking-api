<?php

namespace App\Repository;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class AbstractRepository
 *
 * @author Smartbox Web Team <si-web@smartbox.com>
 */
abstract class AbstractRepository implements RepositoryInterface
{
    /**
     * @var Model
     */
    protected $model;


    /**
     * Constructor to bind model to repo
     *
     * AbstractRepository constructor.
     * @param Model $model
     */
    public function __construct(Model $model)
    {
        $this->model = $model;
    }

    /**
     * Get all instances of model
     *
     * @return Collection|Model[]
     */
    public function all(): Collection
    {
        return $this->model->all();
    }

    /**
     * create a new record in the database
     *
     * @param array $data
     *
     * @return Model
     */
    public function create(array $data): Model
    {
        return $this->model->create($data);
    }

    /**
     * update record in the database
     *
     * @param array $data
     * @param $id
     *
     * @return Model
     */
    public function update(array $data, $id): Model
    {
        $record = $this->model->find($id);

        return $record->update($data);
    }

    // remove record from the database
    public function delete($id)
    {
        return $this->model->destroy($id);
    }

    // show the record with the given id
    public function show($id)
    {
        return $this->model->findOrFail($id);
    }

    // Get the associated model

    /**
     * @return Model
     */
    public function getModel(): Model
    {
        return $this->model;
    }
}