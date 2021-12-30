<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sauce extends Model
{
    public $fillable =['label','prix'];

    public function menu(){
        return $this->belongsToMany('App\Models\Menu');
    }
}
