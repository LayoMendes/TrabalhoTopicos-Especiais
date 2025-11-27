<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    use HasFactory;

    /**
     * Campos que podem ser preenchidos em massa
     */
    protected $fillable = [
        'nome',
        'descricao',
        'imagem',
        'preco',
        'estoque',
        'categoria_id',
    ];

    /**
     * Conversão de tipos
     */
    protected $casts = [
        'preco' => 'decimal:2',
        'estoque' => 'integer',
    ];

    /**
     * Relacionamento: Produto pertence a uma Categoria
     */
    public function categoria()
    {
        return $this->belongsTo(Categoria::class);
    }
}
