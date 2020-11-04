<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    protected $class;

    public function index() {
        return $this->class::all();
    }

    public function show($id) {
        $register = $this->class::find($id);
        if(is_null($register)) {
            return response()->json('',204);
        }
        return response()->json($register, 201);
    }

    public function store(Request $request) {
        return response()->json($this->class::create($request->all()), 201);
    }

    public function update(Request $request, $id) {
        $register = $this->class::find($id);
        if(is_null($register)) {
            return response()->json(['erro'=>'Não existe'],404);
        }
        $register->fill($request->all());
        $register->save();
        return $register;
    }

    public function destroy(int $id) {
        $qtdRecursosRemovidos = $this->class::destroy($id);
        if($qtdRecursosRemovidos === 0 ){
            return response()->json(['erro'=> 'Recurso não encontrado'], 404);
        }
        return response()->json('',204);
    }
}
