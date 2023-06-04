<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = ['nome', 'descricao', 'body', 'preco', 'slug'];

    public function store(){ //  produtos pertence a 1 loja
        return $this->belongsTo(\App\Models\Store::class);

    }

    public function categories(){ //categorias pertence a muitos produtos
        return $this->belongsToMany(\App\Models\Category::class);
    }
}
