<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Doacao;

class doacoesController extends Controller
{
    public function create()
    {
        return view('doacoes.cadastrarDoacoes');
    }
    public function show(Request $request)
    {
        $doacao = Doacao::get();

        return view('doacoes.exibirDoacoes', compact('doacao'));
    }

    public function store(Request $request, Doacao $doacao)
    {
        $nomeD = $request->post('nomeD');
        $tipoD = $request->post('tipoD');
        $quantidade = $request->post('quantidade');

        $request->validate([
            'nomeD' => 'required|',
            'tipoD' => 'required|',
            'quantidade' => 'required|',
        ]);


        $doacao = new Doacao();
        $doacao->nome = $nomeD;
        $doacao->tipo = $tipoD;
        $doacao->quantidade = $quantidade;
        $doacao->save();


        return redirect(url('/doacoes/show'));
    }
}
