<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\cardTwoController;

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

// RUTAS DE PAGINA CLIENTE

// PORTAFOLIO 1
Route::get('/', function () { return view('cardOne.index'); })->name('cardOne.index');

//Portafolio del Desarrollador
Route::get('/develoment/profile', function () { return view('cardDeveloment.index'); })->name('cardDeveloment.index');

// Route::get('/desing/develoment/profile', [cardTwoController::class, 'index'])->name('desing.master.static');
// Route::get('desing/One/index', [cardTwoController::class, 'index'])->name('profile.index');

//  RUTAS PARA PANEL ADMINISTRATIVO

Route::middleware('auth')->group(function () {
    Route::get('/panel',function () { return view('panel.index');})->name('panel.index');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

});

require __DIR__.'/auth.php';

