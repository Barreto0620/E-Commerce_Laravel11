<?php

return [

    /*
    |----------------------------------------------------------------------  
    | Authentication Defaults
    |----------------------------------------------------------------------  
    |  
    | Definindo as configurações padrões de autenticação para o aplicativo.
    |
    */

    'defaults' => [
        'guard' => env('AUTH_GUARD', 'web'),
        'passwords' => env('AUTH_PASSWORD_BROKER', 'users'),
    ],

    /*
    |----------------------------------------------------------------------  
    | Authentication Guards
    |----------------------------------------------------------------------  
    |
    | Definindo os guardas de autenticação para o seu aplicativo.
    |
    */

    'guards' => [
        'web' => [
            'driver' => 'session',
            'provider' => 'users', // Usando o provider 'users' para a autenticação normal
        ],
        'admin' => [
            'driver' => 'session',
            'provider' => 'admins', // Usando um provider separado para administradores, se necessário
        ],
    ],

    /*
    |----------------------------------------------------------------------  
    | User Providers
    |----------------------------------------------------------------------  
    |
    | Definindo o provider de usuários, que conecta o Laravel ao seu banco de dados.
    |
    */

    'providers' => [
        'users' => [
            'driver' => 'eloquent',
            'model' => App\Models\Login::class, // Usando o modelo Login para autenticação de usuários
            'table' => 'USUARIO', // Nome da tabela
            'primaryKey' => 'USUARIO_ID', // Chave primária personalizada
        ],
        'admins' => [
            'driver' => 'eloquent',
            'model' => App\Models\Admin::class, // Modelo de administrador, se necessário
            'table' => 'ADMINISTRADOR', // Nome da tabela de administradores
            'primaryKey' => 'ADM_ID', // Chave primária do administrador, se diferente de 'id'
        ],
    ],

    /*
    |----------------------------------------------------------------------  
    | Password Reset
    |----------------------------------------------------------------------  
    |
    | Configurações para redefinição de senha, incluindo expiração e limite de tentativas.
    |
    */

    'passwords' => [
        'users' => [
            'provider' => 'users',
            'table' => env('AUTH_PASSWORD_RESET_TOKEN_TABLE', 'password_reset_tokens'),
            'expire' => 60,
            'throttle' => 60,
        ],
    ],

    /*
    |----------------------------------------------------------------------  
    | Timeout de Confirmação de Senha
    |----------------------------------------------------------------------  
    |
    | Definindo o tempo de expiração para confirmação de senha.
    |
    */

    'password_timeout' => env('AUTH_PASSWORD_TIMEOUT', 10800),

];
