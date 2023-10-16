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

Route::get('/telaPrincipal', function () {
    return view('telaPrincipal');
});

<<<<<<< Updated upstream
Route::match(['get', 'post'], '/cadastrarUmQuarto', [Controller::class, 'index']);


Route::match(['get', 'post'], '/resevar', [Controller::class, 'resevarQuarto']);


Route::match(['get', 'post'], '/funcionarios', [Controller::class, 'CriarFuncionar']);



Route::match(['get', 'post'], '/criarFuncionario', [Controller::class, 'criarNovo']);



Route::match(['get', 'post'], '/rendaMensal',[Controller::class,'rendaMl']);

Route::match(['get','post'],'/authciar', [Controller::class, 'criarFuncionarioNovo'])->name('auth.criar');
=======
Route::match(['get','post'], '/CadastrarOsQuarto',[Controller::class,'criar']);
>>>>>>> Stashed changes
