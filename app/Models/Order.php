<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $table = 'PEDIDO'; // Nome da tabela no banco de dados
    protected $primaryKey = 'PEDIDO_ID'; // Chave primária

    protected $fillable = [
        'USUARIO_ID',
        'ENDERECO_ID',
        'STATUS_ID',
        'PEDIDO_DATA',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'USUARIO_ID', 'USUARIO_ID');
    }

    public function address()
    {
        return $this->belongsTo(Address::class, 'ENDERECO_ID', 'ENDERECO_ID');
    }

    public function orderItems()
    {
        return $this->hasMany(OrderItem::class, 'PEDIDO_ID', 'PEDIDO_ID');
    }

    public function status()
    {
    return $this->belongsTo(PedidoStatus::class, 'STATUS_ID', 'STATUS_ID');
    }

}
