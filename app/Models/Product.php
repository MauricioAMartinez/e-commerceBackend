<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public function Wishlist(){
        return $this->hasMany('App\Models\Wishlist');
    }
    public function Cart(){
        return $this->hasMany('App\Models\Cart');
    }
}
