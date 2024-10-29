<?php

// app/Models/ProdutoImagem.php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProdutoImagem extends Model
{
    use HasFactory;

    protected $table = 'PRODUTO_IMAGEM'; // Nome da tabela no banco de dados

    protected $primaryKey = 'IMAGEM_ID'; // Definindo a chave primária

    // Definindo os campos que podem ser preenchidos em massa (mass assignment)
    protected $fillable = [
        'IMAGEM_ORDEM',
        'PRODUTO_ID',
        'IMAGEM_URL',
    ];

    // Definindo a relação inversa com a tabela PRODUTO
    public function produto()
    {
        return $this->belongsTo(Produto::class, 'PRODUTO_ID', 'PRODUTO_ID');
    }
}



