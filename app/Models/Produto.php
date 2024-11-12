<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    use HasFactory;

    protected $table = 'PRODUTO'; // Nome da tabela no banco de dados

    protected $primaryKey = 'PRODUTO_ID'; // Definindo a chave primária, caso não seja 'id'

    // Caso a chave primária não seja auto-incremental, defina isso
    // public $incrementing = false;

    // Defina os campos que podem ser preenchidos em massa (mass assignment)
    protected $fillable = [
        'PRODUTO_ATIVO',
        'PRODUTO_NOME',
        'PRODUTO_DESC',
        'PRODUTO_PRECO',
        'PRODUTO_DESCONTO',
        'CATEGORIA_ID',
    ];

    // Definindo a relação com a tabela PRODUTO_IMAGEM
    public function imagens()
    {
        return $this->hasMany(ProdutoImagem::class, 'PRODUTO_ID', 'PRODUTO_ID');
    }

    // Definindo a relação com a tabela CATEGORIA
    public function categoria()
    {
        return $this->belongsTo(Categoria::class, 'CATEGORIA_ID', 'CATEGORIA_ID');
    }
}
