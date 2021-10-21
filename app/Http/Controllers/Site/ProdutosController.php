<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Produto;
use Illuminate\Http\Request;

class ProdutosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Site.Home.index');
    }

    public function relatorios()
    {
        return view('Site.Sistema.relatorios');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Site.Sistema.make');
    }

    public function store(Request $request)
    {
        $produto = $request->all();
        $criarProduto = Produto::create($produto);
        return redirect()->back()->with('mensagem', 'Produto criado com sucesso!');
    }

    public function show($id)
    {
        $procurarProduto = Produto::findOrFail($id);
        return view('Site.Sistema.ver-produto', ['produto' => $procurarProduto]);
    }

    public function edit($id)
    {
        $procurarProduto = Produto::findOrFail($id);
        return view('Site.Sistema.editar-produto', ['produto' => $procurarProduto]);
    }

    public function update(Request $request, $id)
    {
        $produto = Produto::findOrFail($id);
        $produto->update([
        'nome_perfume' => $request->nome_perfume,
        'agua' => $request->agua,
        'alcool' => $request->alcool,
        'fragrancia_ml' => $request->fragrancia_ml,
        'nome_fragrancia' => $request->nome_fragrancia
        ]);
        return redirect()->back()->with('mensagem', 'Registro atualizado com sucesso!');
    }

    public function deletar($id)
    {
        $produto = Produto::findOrFail($id);
        $produto->delete();
        return redirect()->back()->with('mensagem', 'Deletado!');
    }
}
