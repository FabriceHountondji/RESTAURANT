<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    public $fillable =['label','prix'];

    public function plat(){
        return $this->belongsTo('App\Models\Plat');
    }

    public function accompagnement(){
        return $this->belongsTo('App\Models\Accompagnement');
    }
    public function boisson(){
        return $this->belongsTo('App\Models\Boisson');
    }

    public function sauce(){
        return $this->belongsTo('App\Models\Sauce');
    }
}
