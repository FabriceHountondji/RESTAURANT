<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    public $fillable =['name','description','prix','photo','category_id','acteur_id'];

    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function acteur(){
        return $this->belongsTo(Acteur::class);
    }
}
