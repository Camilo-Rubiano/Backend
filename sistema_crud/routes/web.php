<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmpleadosController;
use App\Http\Controllers\HojadevidaController;
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

/*Route::get('/empleado', function () {
    return view('empleado.index');
});

Route::get('empleado/create',[EmpleadoController::class,'create']);*/

/*Se accede a todas las clases */

Route::resource('empleados', EmpleadosController::class);
Auth::routes();

Route::resource('hojadevida', HojadevidaController::class);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/empleados/create',[EmpleadosController::class, 'create'])->name('home');;
Route::get('/hojadevida/create',[HojadevidaController::class, 'create'])->name('home');;

