<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cnpj extends Model
{
    protected $table = 'cnpj';

    protected $fillable = [
        'cnpj',
        'nome'
    ];
}
