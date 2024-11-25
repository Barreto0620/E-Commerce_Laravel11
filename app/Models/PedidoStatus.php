<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PedidoStatus extends Model
{
    use HasFactory;

    protected $table = 'PEDIDO_STATUS'; // Nome da tabela no banco de dados
    protected $primaryKey = 'STATUS_ID'; // Chave primária

    protected $fillable = [
        'STATUS_DESC',
    ];

    public $timestamps = false; // A tabela não possui campos created_at e updated_at

    public function orders()
    {
        return $this->hasMany(Order::class, 'STATUS_ID', 'STATUS_ID');
    }
}
