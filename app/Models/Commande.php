<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commande extends Model
{
    public $fillable =['prix','date','menu_id'];

    public function user(){
        return $this->belongsToMany('App\Models\User');
    }

    public function menu(){
        return $this->belongsTo('App\Models\Menu');
    }
}
