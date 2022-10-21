<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public $fillable = ['name','description'];

    public function menus(){
        return $this->belongsToMany(Menu::class);
    }
}
