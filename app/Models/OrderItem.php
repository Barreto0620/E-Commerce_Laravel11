<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model
{
    use HasFactory;

    protected $table = 'PEDIDO_ITEM'; // Nome da tabela no banco de dados

    protected $fillable = [
        'PEDIDO_ID',
        'PRODUTO_ID',
        'ITEM_QTD',
        'ITEM_PRECO',
    ];

    public $timestamps = false; // A tabela não possui colunas created_at e updated_at

    public function order()
    {
        return $this->belongsTo(Order::class, 'PEDIDO_ID', 'PEDIDO_ID');
    }

    public function product()
    {
        return $this->belongsTo(Produto::class, 'PRODUTO_ID', 'PRODUTO_ID');
    }
}
