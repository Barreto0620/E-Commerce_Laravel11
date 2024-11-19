<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = 'PRODUTO'; // Ou o nome da sua tabela no banco de dados
    protected $primaryKey = 'PRODUTO_ID'; // Defina a chave primária se for diferente do padrão
    protected $fillable = ['PRODUTO_NOME', 'PRODUTO_DESC', 'PRODUTO_PRECO', 'CATEGORIA_ID'];
}
