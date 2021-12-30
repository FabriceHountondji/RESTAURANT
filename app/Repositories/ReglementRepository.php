<?php

namespace App\Repositories;

use App\Traits\Repository;
use App\\Models\\Reglement; 

class ReglementRepository
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
        $this->model = app(Reglement::class);
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
    public function makeStore($data): Reglement{
        $reglement = new Reglement($data);
        $reglement->save();
        return $reglement;
    }

    /**
     * To update model
     */
    public function makeUpdate($id, $data): Reglement{
        $reglement = Reglement::findOrFail($id);
        $reglement->update($data);
        return $reglement;
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
