<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'description', 'slug'];

    public function produtcts(){ //produtos pertence a muitas categorias
        return $this->belongsToMany(\App\Models\Product::class, 'category_product', 'produtct_id');
    }
}
