<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CompraController;
use App\Http\Controllers\ProductoController;
use App\Models\Producto; 

Route::get('/', function () {
    return view('home');
})->name('home');


Route::get('/nosotros', function () {
    return view('pages.nosotros'); })->name('nosotros');
Route::get('/arreglos', function () {
    $productos = Producto::where('categoria', 'arreglos')->get();
    return view('pages.arreglos', compact('productos'));
})->name('arreglos');

Route::get('/juguetes', function () {
    $productos = Producto::where('categoria', 'juguetes')->get();
    return view('pages.juguetes', compact('productos'));
})->name('juguetes');

Route::get('/peluches', function () {
    $productos = Producto::where('categoria', 'peluches')->get();
    return view('pages.peluches', compact('productos'));
})->name('peluches');

Route::get('/ropa-bebes', function () {
    $productos = Producto::where('categoria', 'ropa_bebe')->get();
    return view('pages.ropaBebes', compact('productos'));
})->name('ropaBebes');
Route::get('/politica-privacidad', function () {
    return view('pages.politicaPrivacidad'); })->name('politicaPrivacidad');
Route::get('/contacto', function () {
    return view('pages.direccionContacto'); })->name('contacto');

Route::get('/info-arreglos', function () {
    return view('pages.infoArreglos'); })->name('infoArreglos');
Route::get('/info-juguetes', function () {
    return view('pages.infoJuguetes'); })->name('infoJuguetes');
Route::get('/info-peluches', function () {
    return view('pages.infoPeluches'); })->name('infoPeluches');
Route::get('/info-ropa-bebe', function () {
    return view('pages.infoRopaBebe'); })->name('infoRopaBebe');


Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
Route::post('/register', [AuthController::class, 'register']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');


Route::get('/compra', [CompraController::class, 'show'])->name('compra');
Route::post('/compra', [CompraController::class, 'store']);

Route::resource('productos', ProductoController::class);