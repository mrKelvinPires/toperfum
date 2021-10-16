<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Site\ProdutosController;
use Illuminate\Http\Request;

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
Route::get('/make-perfum', [ProdutosController::class, 'store']);


// Rota para Sistema Relatórios
Route::get('/relatorios', [ProdutosController::class, 'relatorios']);



 