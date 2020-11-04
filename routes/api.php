<?php

use App\Http\Controllers\CarrinhoController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\FechaPedidoController;
use App\Http\Controllers\ProdutoController;
use Illuminate\Support\Facades\Route;

Route::resource('produto', ProdutoController::class);
Route::resource('cliente',ClienteController::class);
Route::resource('carrinho', CarrinhoController::class);
Route::resource('fecha', FechaPedidoController::class);

Route::get('lista/carrinho', [CarrinhoController::class, 'lista']);
Route::get('lista/produtos', [CarrinhoController::class, 'listaProdutos']);
Route::post('lista/produtos', [FechaPedidoController::class, 'finalizarPedido']);
