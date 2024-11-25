<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    use HasFactory;

    protected $table = 'ENDERECO'; // Nome da tabela no banco de dados (ajustado para minúsculas)
    protected $primaryKey = 'ENDERECO_ID'; // Chave primária

    protected $fillable = [
        'USUARIO_ID',
        'ENDERECO_NOME',
        'ENDERECO_LOGRADOURO',
        'ENDERECO_NUMERO',
        'ENDERECO_COMPLEMENTO',
        'ENDERECO_CEP',
        'ENDERECO_CIDADE',
        'ENDERECO_ESTADO',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'USUARIO_ID', 'USUARIO_ID');
    }

    public function orders()
    {
        return $this->hasMany(Order::class, 'ENDERECO_ID', 'ENDERECO_ID');
    }
}
