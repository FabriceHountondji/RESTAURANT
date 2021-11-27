<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    public $fillable = ['name','phone','birthday','sex','address','avatar','email','password','role_id'];

    public function commandes(){
        return $this->hasMany('App\Models\Commande');
    }

    public function factures(){
        return $this->hasMany('App\Models\Facture');
    }

    public function menus(){
        return $this->hasMany('App\Models\Menu');
    }

    public function role(){
        return $this->belongsTo('App\Models\Commande');
    }
}
