<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VariaProduto extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_produto', 
        'variacao'
    ];

    // Relações / Relationship


}
