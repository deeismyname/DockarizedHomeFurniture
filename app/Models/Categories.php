<?php

namespace App\Models;

use App\Models\Product;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Categories extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function products(){
        return $this->hasMany(Product::class);
}

public function heros(){
    return $this->hasMany(WelcomeImage::class);
}
}
