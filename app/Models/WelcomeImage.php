<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WelcomeImage extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function categories(){
        return $this->belongsTo(Categories::class, 'categories_id', 'id');
    }
}
