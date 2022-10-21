<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Imageassocy extends Model
{
    public $fillable = ['menu_id','image_id'];

    public function menu(){
        return $this->belongsTo(Menu::class);
    }

    public function image(){
        return $this->belongsTo(Image::class);
    }
}
