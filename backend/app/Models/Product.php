<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
        'title',
        'meta_description',
        'short_description',
        'description',
        'price',
        'image_url',
        'is_active',
    ];
}
