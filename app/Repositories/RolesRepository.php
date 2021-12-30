<?php

namespace App\Repositories;

use App\Traits\Repository;
use App\\Models\\Roles; 

class RolesRepository
{
    use Repository;

    /**
     * The model being queried.
     *
     * @var Model
     */
    protected $model;
    

    /**
     * Constructor
     */
    public function __construct()
    {
        // setup the model
        $this->model = app(Roles::class);
    }

    /**
     * Check if exists
     */
    public function ifExist($id)
    {
        return $this->find($id);
    }

    /**
     * Get an element
     */
    public function get($id)
    {
        return $this->findOrFail($id);
    }

    /**
     * To store model
     */
    public function makeStore($data): Roles{
        $roles = new Roles($data);
        $roles->save();
        return $roles;
    }

    /**
     * To update model
     */
    public function makeUpdate($id, $data): Roles{
        $roles = Roles::findOrFail($id);
        $roles->update($data);
        return $roles;
    }

    /**
     * To delete model
     */
    public function makeDestroy($id)
    {
        return $this->findOrFail($id)->delete();
    }

    /**
     * To get all latest
     */
    public function getlatest()
    {
        return $this->latest()->get();
    }
}
