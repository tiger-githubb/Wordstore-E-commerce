<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    use HasFactory;

    protected $table = 'categories';

    protected $fillable = [
        'nom',
        'slug',
        'desc',
        'status',
        'popular',
        'image',
        'meta_title',
        'meta_desc',
        'meta_keywords',
    ];
}
