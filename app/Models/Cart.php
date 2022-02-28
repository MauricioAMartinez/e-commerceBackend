<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;

    public function User(){
        return $this->belongsTo('App\Models\User');
    }

    public function Product(){
        return $this->belongsTo('App\Models\Product');
    }
}
