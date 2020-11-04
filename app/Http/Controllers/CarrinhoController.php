<?php

namespace App\Http\Controllers;

use App\Models\Carrinho;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CarrinhoController extends Controller
{

    public function __construct()
    {
        $this->class = Carrinho::class;
    }

    public function lista()
    {
        $register = Carrinho::all();
        $total = 0;

        foreach ($register as $registro) {
            $total+= $registro->quantidade;
        }
        return $total;
    }

    public function listaProdutos(){
        $register = DB::table('carrinhos')
            ->join('produtos', 'carrinhos.produto_id', '=', 'produtos.id')
            ->select(
                'produtos.nome',
                'carrinhos.quantidade',
                'produtos.preco',
                'produtos.peso',
                'carrinhos.numero_pedido'
            )
            ->get();

         return response()->json($register,201);
    }

}
