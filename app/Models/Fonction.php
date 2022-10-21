<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fonction extends Model
{
    public $fillable = ['name','description'];

    public function acteurs(){
        return $this->belongsToMany(Acteur::class);
    }
}
