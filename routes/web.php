<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HelloWorldController;
use App\Http\Controllers\NameController;

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

// Rota para a página inicial com a lista de nomes
Route::get('/', function () {
    $names = App\Models\Name::all();
    return view('crud', compact('names'));
});

// Rota para a página "Hello World" usando o HelloWorldController
Route::get('/hello', [HelloWorldController::class, 'show']);

// Rotas de recurso para o NameController (CRUD para nomes)
Route::resource('names', NameController::class);

Route::get('/names/create', [NameController::class, 'create'])->name('names.create');
