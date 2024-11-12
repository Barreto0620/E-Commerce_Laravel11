<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    use HasFactory;

    // Definindo o nome da tabela no banco de dados
    protected $table = 'CATEGORIA'; 

    // Definindo a chave primária
    protected $primaryKey = 'CATEGORIA_ID'; 

    // Caso a chave primária não seja auto-incremental, defina isso
    // public $incrementing = false;

    // Definindo os campos que podem ser preenchidos em massa (mass assignment)
    protected $fillable = [
        'CATEGORIA_NOME',
        'CATEGORIA_DESC',
    ];

    // Definindo a relação com a tabela PRODUTO 
    public function produtos()
    {
        return $this->hasMany(Produto::class, 'CATEGORIA_ID', 'CATEGORIA_ID');
    }
}
