<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFechaPedidosTable extends Migration
{

    public function up()
    {
        Schema::create('fecha_pedidos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome_cliente');
            $table->string('email');
            $table->integer('numero_pedido');
            $table->float('distancia');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('fecha_pedidos');
    }
}
