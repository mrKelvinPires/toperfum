<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RegraUser extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_perfume',
        'id_regra'
    ];
}
 