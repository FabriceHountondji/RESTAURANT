<?php

namespace App\Repositories;

use App\Traits\Repository;
use App\\Models\\Accompagnement; 

class AccompagnementRepository
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
        $this->model = app(Accompagnement::class);
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
    public function makeStore($data): Accompagnement{
        $accompagnement = new Accompagnement($data);
        $accompagnement->save();
        return $accompagnement;
    }

    /**
     * To update model
     */
    public function makeUpdate($id, $data): Accompagnement{
        $accompagnement = Accompagnement::findOrFail($id);
        $accompagnement->update($data);
        return $accompagnement;
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
