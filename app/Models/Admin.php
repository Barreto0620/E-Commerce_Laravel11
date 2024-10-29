<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Admin extends Authenticatable
{
    use Notifiable;

    protected $table = 'ADMINISTRADOR';
    protected $primaryKey = 'ADM_ID';

    protected $fillable = [
        'ADM_NOME', 'ADM_EMAIL', 'ADM_SENHA', 'ADM_ATIVO'
    ];

    protected $hidden = [
        'ADM_SENHA',
    ];

    public $timestamps = false;

    public function getAuthPassword()
    {
        return $this->ADM_SENHA;
    }
}
