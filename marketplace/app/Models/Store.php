<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Store extends Model
{
    use HasFactory;

    protected $fillable = ['nome', 'descricao', 'telefone', 'celular', 'slug'];


    public function user(){ // 1 loja pertence a 1 usuario

        return $this->belongsTo(\App\Models\User::class, 'user_id'); // caso o nome da foreign seja diferente é só colocar o nome dela como segundo parametro
    }

    public function products(){ // store tem muitos produtos

        return $this->hasMany(\App\Models\Product::class);
    }
}
