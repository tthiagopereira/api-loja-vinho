<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProdutoSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $register = [
            ['imagem'=>'img/img-1.jpg', 'nome'=>'Amorane','tipo'=>'Vinhos Tintos', 'peso'=> 2.4,'preco'=>20.0],
            ['imagem'=>'img/img-3.jpg', 'nome'=>'Barolo','tipo'=>'Vinhos Tintos', 'peso'=> 2.7,'preco'=>500],
            ['imagem'=>'img/img-4.jpg', 'nome'=>'Bonarda','tipo'=>'Vinhos Branco', 'peso'=> 2.8,'preco'=>140.5],
            ['imagem'=>'img/img-5.jpg', 'nome'=>'Bobal','tipo'=>'Vinhos Tintos', 'peso'=> 2.9,'preco'=>70],
        ];
        DB::table('produtos')->insert($register);
    }
}
