<?php

namespace App\Repositories;

use App\Traits\Repository;
use App\\Models\\Menu; 

class MenuRepository
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
        $this->model = app(Menu::class);
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
    public function makeStore($data): Menu{
        $menu = new Menu($data);
        $menu->save();
        return $menu;
    }

    /**
     * To update model
     */
    public function makeUpdate($id, $data): Menu{
        $menu = Menu::findOrFail($id);
        $menu->update($data);
        return $menu;
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
