<?php

namespace App\Repositories;

use App\Traits\Repository;
use App\Models\Client; 

class ClientRepository
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
        $this->model = app(Client::class);
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
    public function makeStore($data): Client{
        $client = new Client($data);
        $client->save();
        return $client;
    }

    /**
     * To update model
     */
    public function makeUpdate($id, $data): Client{
        $client = Client::findOrFail($id);
        $client->update($data);
        return $client;
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
