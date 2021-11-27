<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sauce extends Model
{
    public $fillable =['label','prix'];

    public function menu(){
        return $this->belongsTo('App\Models\Menu');
    }
}
