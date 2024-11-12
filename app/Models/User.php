<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    // Especificando qual campo será utilizado para autenticação
    public $username = 'USUARIO_EMAIL'; // Definindo o campo correto de email

    /**
     * Os atributos que podem ser atribuídos em massa.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'USUARIO_EMAIL',  // Campo de email na sua tabela
        'name',
        'password',
        // outros campos, se necessário
    ];

    /**
     * Os atributos que devem ser ocultados na serialização.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Obter os atributos que devem ser convertidos.
     *
     * @return array<string, string>
     */
    protected $casts = [
        'password' => 'hashed',  // Caso utilize o hash no password
    ];
}
