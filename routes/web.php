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

// Ver Produto
Route::get('/ver-produto/{id}', [ProdutosController::class, 'show']);

// Editar Produto
Route::get('/editar-produto/{id}', [ProdutosController::class, 'edit']);
Route::post('/editar-produto/{id}', [ProdutosController::class, 'update']);

// Rota para Sistema Relatórios
Route::get('/relatorios', [ProdutosController::class, 'relatorios']);

// Deletar
Route::get('/delete/{id}', [ProdutosController::class, 'deletar']);

