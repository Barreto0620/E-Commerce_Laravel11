<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PedidoItem extends Model
{
    use HasFactory;

    protected $table = 'pedido_item';
    protected $primaryKey = ['pedido_id', 'produto_id']; // Chave composta

    public $incrementing = false;
    public $timestamps = false;

    protected $fillable = [
        'pedido_id',
        'produto_id',
        'item_qtd',
        'item_preco',
    ];

    // Relacionamento com o pedido
    public function pedido()
    {
        return $this->belongsTo(Pedido::class, 'pedido_id', 'pedido_id');
    }

    // Relacionamento com o produto
    public function produto()
    {
        return $this->belongsTo(Produto::class, 'produto_id', 'produto_id');
    }
}
