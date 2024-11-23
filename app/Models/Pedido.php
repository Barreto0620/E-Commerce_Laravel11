<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    use HasFactory;

    protected $table = 'pedido';
    protected $primaryKey = 'pedido_id';

    protected $fillable = [
        'usuario_id',
        'endereco_id',
        'status_id',
        'pedido_data',
    ];

    // Relacionamento com o usuário
    public function usuario()
    {
        return $this->belongsTo(User::class, 'usuario_id', 'usuario_id');
    }

    // Relacionamento com itens do pedido
    public function itens()
    {
        return $this->hasMany(PedidoItem::class, 'pedido_id', 'pedido_id');
    }

}
