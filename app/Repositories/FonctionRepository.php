<?php

namespace App\Repositories;

use App\Traits\Repository;
use App\Models\Fonction; 

class FonctionRepository
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
        $this->model = app(Fonction::class);
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
    public function makeStore($data): Fonction{
        $fonction = new Fonction($data);
        $fonction->save();
        return $fonction;
    }

    /**
     * To update model
     */
    public function makeUpdate($id, $data): Fonction{
        $fonction = Fonction::findOrFail($id);
        $fonction->update($data);
        return $fonction;
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
