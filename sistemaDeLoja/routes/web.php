<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });


Route::match(['get', 'post'], '/', [Controller::class,  'logon']);

Route::match(['get', 'post'], '/auth', [Controller::class, 'auth'])->name('auth.uer');

// Route::get('/telaPrincipal', function () {


//     return view('telaPrincipal');
// });

Route::match(['get', 'post'], '/telaPrincipal', [Controller::class, 'Pricpal']);

Route::match(['get', 'post'], '/Quarto', [Controller::class, 'indexc']);


Route::match(['get', 'post'], '/resevar', [Controller::class, 'resevarQuarto']);


Route::match(['get', 'post'], '/funcionarios', [Controller::class, 'CriarFuncionar'])->name('produtos.search');

Route::match(['get', 'post'], '/criarFuncionario', [Controller::class, 'criarNovo']);

Route::delete('criarFuncionario/{funcionarios}', [Controller::class, 'destroy'])->name('items.destroy');



Route::match(['get', 'post'], '/users{id}/edit', [Controller::class, 'edit'])->name('users.edit'); // rota para leva ate a tela de edita

// Route::put(['get', 'post'], '/users{id}', [Controller::class, 'update'])->name('users.update');
Route::put('/users/{id}', [Controller::class, 'update'])->name('users.update');


Route::match(['get', 'post'], '/rendaMensal', [Controller::class, 'rendaMl']);

Route::match(['get', 'post'], '/authciar', [Controller::class, 'criarFuncionarioNovo'])->name('auth.criar');
