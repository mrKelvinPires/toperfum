<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Site\ProdutosController;
use App\Models\Produto;
use Illuminate\Http\Request;

// Route::get('/', function () {
//     return view('welcome');
// });

// Rota para Página Home
Route::get('/', [ProdutosController::class, 'index']);

// Rota para Sistema Make Perfum
// Route::post('/make-perfum', function (Request $request) {
//     dd($request->all());
//     // return view('Site.Sistema.make');
// });

// Rota para Formulário Make Perfum
Route::get('/make-perfum', [ProdutosController::class, 'create']);

// Rota para criar Produto no BD
Route::post('/make-perfum', [ProdutosController::class, 'store']);

Route::get('/relatorios/{id}', [ProdutosController::class, 'show']);

// Rota para criar Produto no BD
// Route::post('/make-perfum', function (Request $request) {
//     Produto::create([
//         'nome_perfume' => $request->nome_perfume,
//         'agua' => $request->agua,
//         'alcool' => $request->alcool,
//         'fragrancia_ml' => $request->fragrancia_ml,
//         'nome_fragrancia' => $request->nome_fragrancia
//     ]);
// });

// Rota para Sistema Relatórios
Route::get('/relatorios', [ProdutosController::class, 'relatorios']);