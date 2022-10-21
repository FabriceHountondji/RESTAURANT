<?php

namespace App\Repositories;

use App\Traits\Repository;
use App\Models\Imageassocy; 

class ImageassocyRepository
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
        $this->model = app(Imageassocy::class);
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
    public function makeStore($data): Imageassocy{
        $imageassocy = new Imageassocy($data);
        $imageassocy->save();
        return $imageassocy;
    }

    /**
     * To update model
     */
    public function makeUpdate($id, $data): Imageassocy{
        $imageassocy = Imageassocy::findOrFail($id);
        $imageassocy->update($data);
        return $imageassocy;
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
