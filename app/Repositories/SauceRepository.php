<?php

namespace App\Repositories;

use App\Traits\Repository;
use App\\Models\\Sauce; 

class SauceRepository
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
        $this->model = app(Sauce::class);
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
    public function makeStore($data): Sauce{
        $sauce = new Sauce($data);
        $sauce->save();
        return $sauce;
    }

    /**
     * To update model
     */
    public function makeUpdate($id, $data): Sauce{
        $sauce = Sauce::findOrFail($id);
        $sauce->update($data);
        return $sauce;
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
