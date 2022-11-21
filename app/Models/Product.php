<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Product extends Model
{
    use HasFactory;

    protected $casts = [
        'tags' => 'array',
        'colors' => 'array',
        'other_images' => 'array'
    ];

    protected $guarded = ['id'];
    public function images(){
        return $this->hasMany(Images::class);
    }

    public function categories(){
        return $this->belongsTo(Categories::class, 'categories_id', 'id');
    }
}
