<?php

namespace App\Repositories;

use App\Traits\Repository;
use App\Models\Category; 

class CategoryRepository
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
        $this->model = app(Category::class);
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
    public function makeStore($data): Category{
        $category = new Category($data);
        $category->save();
        return $category;
    }

    /**
     * To update model
     */
    public function makeUpdate($id, $data): Category{
        $category = Category::findOrFail($id);
        $category->update($data);
        return $category;
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
