<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Carrinho extends Model
{
    use HasFactory;
    protected $fillable = ['produto_id','quantidade','numero_pedido'];

    public function produtos()
    {
        return $this->belongsTo(Produto::class,'produto_id');
    }
}
