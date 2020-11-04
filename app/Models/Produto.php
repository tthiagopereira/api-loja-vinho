<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    use HasFactory;
    protected $fillable = ['imagem', 'nome','tipo','peso','preco'];

    public function carrinho()
    {
        return $this->hasMany(Carrinho::class);
    }
}
