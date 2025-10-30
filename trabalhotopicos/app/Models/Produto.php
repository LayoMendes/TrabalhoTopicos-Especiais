<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Produto extends Model
{
    use HasFactory;

    // Permite atribuição em massa do campo 'nome'
    protected $fillable = ['nome'];
}
