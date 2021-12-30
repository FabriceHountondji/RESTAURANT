<?php

namespace App\Repositories;

use App\Traits\Repository;
use App\\Models\\TypeReglement; 

class TypeReglementRepository
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
        $this->model = app(TypeReglement::class);
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
    public function makeStore($data): TypeReglement{
        $typereglement = new TypeReglement($data);
        $typereglement->save();
        return $typereglement;
    }

    /**
     * To update model
     */
    public function makeUpdate($id, $data): TypeReglement{
        $typereglement = TypeReglement::findOrFail($id);
        $typereglement->update($data);
        return $typereglement;
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
