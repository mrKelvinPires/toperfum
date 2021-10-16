<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


// Rota para Página Home
// Route::get('/', function() { 
//     return view('Site.Home.index'); 
// });
// Route::get('/', [ComponentesController::class, 'index']);

// Rota para Sistema de Relatórios
// Route::get('/relatorios', function() {  
//     return view('Site.Sistema.relatorios'); 
// });
// Route::get('/relatorios', [ComponentesController::class, 'relatorios']);

// // Rotas para métodos de criação - cadastro dos perfumes - CRUD
// Route::post('/create', [ComponentesController::class, 'store']
// dd($request->all());
// );

Route::post('/create', function(Request $request) { 
    return view('Site.Sistema.create'); 
    dd($request->all());
});

 