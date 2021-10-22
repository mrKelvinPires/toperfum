<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Telefone;
use App\Models\Regra;

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

    public function telefones(){
        // return $this->hasOne(Telefone::class, 'id_perfume');
        return $this->hasMany(Telefone::class, 'id_perfume');
    }

    public function regras(){
        return $this->belongsToMany(Regra::class, 'regra_users', 'id_perfume', 'id_regra');
    }
}
