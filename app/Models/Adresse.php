<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Adresse extends Model
{
    public $fillable = ['pays','ville','quartier','contact'];

    public function clients(){

        return $this->belongsToMany(Client::class);

    }
}
