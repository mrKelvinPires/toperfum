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

// Rota para Formulário Make Perfum
Route::get('/make-perfum', [ProdutosController::class, 'create']);

// Rota para criar Produto no BD
Route::post('/make-perfum', [ProdutosController::class, 'store']);

// Rota para Sistema Ver Produto
Route::get('/ver-produto/{id}', [ProdutosController::class, 'show']);

// Rota para Sistema Ver Produto
Route::get('/editar-produto/{id}', [ProdutosController::class, 'edit']);

// Rota para Sistema Relatórios
Route::get('/relatorios', [ProdutosController::class, 'relatorios']);

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

