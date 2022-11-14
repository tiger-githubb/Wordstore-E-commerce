<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produit extends Model
{
    use HasFactory;

    protected $table = 'produits';

    protected $fillable = [
        'cate_id',
        'nom',
        'slug',
        'small_desc',
        'desc',
        'prix_o',
        'prix_v',
        'image',
        'qte',
        'taxe',
        'status',
        'trending',
        'meta_title',
        'meta_desc',
        'meta_keywords',
    ];

    public function categorie()
    {
        return $this->belongsTo(Categorie::class, 'cate_id', 'id');
    }
}
