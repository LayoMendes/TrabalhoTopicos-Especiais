<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    use HasFactory;

    /**
     * Campos que podem ser preenchidos em massa
     */
    protected $fillable = [
        'nome',
        'descricao',
    ];

    /**
     * Relacionamento: Categoria tem muitos Produtos
     */
    public function produtos()
    {
        return $this->hasMany(Produto::class);
    }
}
