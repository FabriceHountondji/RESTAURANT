<?php

namespace App\Repositories;

use App\Traits\Repository;
use App\\Models\\Boisson; 

class BoissonRepository
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
        $this->model = app(Boisson::class);
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
    public function makeStore($data): Boisson{
        $boisson = new Boisson($data);
        $boisson->save();
        return $boisson;
    }

    /**
     * To update model
     */
    public function makeUpdate($id, $data): Boisson{
        $boisson = Boisson::findOrFail($id);
        $boisson->update($data);
        return $boisson;
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
