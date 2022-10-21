<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    public $fillable = ['name', 'description'];

    public function user(){
        return $this->belongsToMany(User::class);
    }
}
