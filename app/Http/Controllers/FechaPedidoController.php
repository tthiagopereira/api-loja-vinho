<?php

namespace App\Http\Controllers;

use App\Models\FechaPedido;
use Illuminate\Http\Request;

class FechaPedidoController extends Controller
{
    public function __construct()
    {
        $this->class = FechaPedido::class;
    }

}
