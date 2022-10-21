<?php

namespace App\Repositories;

use App\Traits\Repository;
use App\Models\Acteur; 

class ActeurRepository
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
        $this->model = app(Acteur::class);
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
    public function makeStore($data): Acteur{
        $acteur = new Acteur($data);
        $acteur->save();
        return $acteur;
    }

    /**
     * To update model
     */
    public function makeUpdate($id, $data): Acteur{
        $acteur = Acteur::findOrFail($id);
        $acteur->update($data);
        return $acteur;
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
