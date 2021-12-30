<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Roles extends Model
{
    public $fillable = ['name', 'role', 'role_id'];

    public function user(){
        return $this->hasMany('App\Models\User');
    }
}
