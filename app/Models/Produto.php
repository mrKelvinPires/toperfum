<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    use HasFactory;
    protected $fillable = [
        'nome_perfume',
        'agua',
        'alcool',
        'fragrancia_ml',
        'nome_fragrancia'
    ];

    // Relationship / Relações 
    public function variacoes(){
        return $this->hasMany(VariaProduto::class, 'id_produto');
    }
}
