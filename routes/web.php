<?php

use App\Http\Controllers\ClienteController;
use App\Http\Controllers\UserController;
use App\Models\cliente;
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

Route::get('/', function () {
    $clientes= cliente::all();
    return view('register',['clientes'=> $clientes]);
});




Route::post('/register', [UserController::class, 'register']);
Route::post('/logout',[UserController::class, 'logout']);
Route::post('/login',[UserController::class, 'login']);

//POST ROUTES
Route::post('/create-post',[ClienteController::class,'createPost']);
Route::get('/edit-cliente/{cliente}',[ClienteController::class,'editCliente'])->name('edit.cliente');
Route::put('/edit-cliente/{cliente}',[ClienteController::class,'editCliente2']);
Route::delete('/delete-cliente/{cliente}',[ClienteController::class,'deleteCliente'])->name('delete.cliente');

