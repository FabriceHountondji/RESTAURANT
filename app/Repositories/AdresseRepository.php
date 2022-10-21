<?php

namespace App\Repositories;

use App\Traits\Repository;
use App\Models\Adresse; 

class AdresseRepository
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
        $this->model = app(Adresse::class);
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
    public function makeStore($data): Adresse{
        $adresse = new Adresse($data);
        $adresse->save();
        return $adresse;
    }

    /**
     * To update model
     */
    public function makeUpdate($id, $data): Adresse{
        $adresse = Adresse::findOrFail($id);
        $adresse->update($data);
        return $adresse;
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
