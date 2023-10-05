<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    use HasFactory;

    protected $fillable = [
        'numero_fatura',
        'data_fatura',
        'data_vencimento',
        'nome_emitente',
        'endereco_emitente',
        'cpf_cnpj_emitente',
        'nome_cliente',
        'endereco_cliente',
        'cpf_cnpj_cliente',
        'descricao_item',
        'quantidade',
        'preco_unitario',
        'subtotal',
        'impostos',
        'desconto',
        'total',
        'metodo_pagamento',
        'condicoes_pagamento',
        'numero_pedido',
        'notas',
        'status'
    ];
}
