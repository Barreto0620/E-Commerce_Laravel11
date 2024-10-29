<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Login extends Authenticatable
{
    use Notifiable;

    protected $table = 'USUARIO';
    protected $primaryKey = 'USUARIO_ID';

    
    
    protected $fillable = [
        'USUARIO_NOME', 'USUARIO_EMAIL', 'USUARIO_SENHA'
    ];
    
    protected $hidden = [
        'USUARIO_SENHA',
    ];
    public $timestamps = false;

    public function getAuthPassword()
    {
        return $this->USUARIO_SENHA;
    }
}
