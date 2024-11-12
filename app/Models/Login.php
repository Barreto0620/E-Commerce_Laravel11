<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Auth\Authenticatable as AuthenticatableTrait;

class Login extends Model implements Authenticatable
{
    use AuthenticatableTrait;

    protected $table = 'USUARIO'; // A tabela que você está utilizando
    protected $primaryKey = 'USUARIO_ID'; // Definindo a chave primária como 'USUARIO_ID'
    public $incrementing = false; // Impede o Laravel de tentar usar um auto-incremento (caso você não esteja usando)
    public $timestamps = false; // Impede o uso de 'created_at' e 'updated_at' (caso não tenha esses campos na tabela)

    protected $fillable = [
        'USUARIO_NOME', 'USUARIO_CPF', 'USUARIO_EMAIL', 'USUARIO_SENHA',
    ];
}
