<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Pizza;

class PizzaController extends Controller
{

    public function index()
    {
        $pizzas = Pizza::orderBy('name', 'desc')->get();
        return $pizzas;     
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        $validate = $request->validate([
            'name'=>'required',
            'sabor'=>'required',
            'tamanho'=>'required',
            'preco'=>'required'
          ]);
        if($validate){
            $register = Pizza::create($request->all());
        } 
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }
  
    public function update(Request $request, $id)
    {
        $pizza = Pizza::find($id);
        $pizza->name = $request->get('name');
        $pizza->sabor = $request->get('sabor');
        $pizza->tamanho = $request->get('tamanho');
        $pizza->preco = $request->get('preco');
        
        $pizza->tamanho = intval($pizza->tamanho);
        $pizza->preco = intval($pizza->preco);

        $pizza->save();
    }


    public function destroy($id)
    {
        $pizza = Pizza::find($id);
        $pizza->delete();
    }
}
