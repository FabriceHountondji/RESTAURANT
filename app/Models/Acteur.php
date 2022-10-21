<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Acteur extends Model
{
    public $fillable = ['firstname','lastname','phone','birthday','sexe','address','photo','user_id'];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function menus(){
        return $this->belongsToMany(Menu::class);
    }
}
