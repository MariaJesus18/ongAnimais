<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Animal;

class animaisController extends Controller
{
    public function index()
    {
        return view('welcome');
    }
    public function create()
    {
        return view('animais.cadastrarAnimais');
    }
    public function show(Animal $animal)
    {

        $animal = Animal::get();

        return view('animais.exibirAnimais', compact('animal'));
    }
    public function store(Request $request, Animal $animal)
    {

        $nome = $request->post('nome');
        $tipo = $request->post('tipo');
        $raca = $request->post('raca');

        $request->validate([
            'nome' => 'required|',
            'tipo' => 'required|',
            'raca' => 'required|'
        ]);

        $animal = new Animal;
        $animal->nome = $nome;
        $animal->tipo = $tipo;
        $animal->raca = $raca;
        $animal->save();


        return redirect(url('/animais/show'));
    }
}
