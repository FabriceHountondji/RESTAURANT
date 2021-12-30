<?php

namespace App\Repositories;

use App\Traits\Repository;
use App\\Models\\Commande; 

class CommandeRepository
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
        $this->model = app(Commande::class);
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
    public function makeStore($data): Commande{
        $commande = new Commande($data);
        $commande->save();
        return $commande;
    }

    /**
     * To update model
     */
    public function makeUpdate($id, $data): Commande{
        $commande = Commande::findOrFail($id);
        $commande->update($data);
        return $commande;
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
