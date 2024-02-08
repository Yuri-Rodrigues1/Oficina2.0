<?php

use App\Http\Controllers\OrcamentosController;
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


Route::prefix('orcamentos')->group(function(){
    Route::get('/',[OrcamentosController::class, 'index'])->name('orcamentos-index');
    Route::get('/create',[OrcamentosController::class, 'create'])->name('orcamentos-create');
    Route::post('/',[OrcamentosController::class, 'store'])->name('orcamentos-store');
    Route::get('/{id}/edit',[OrcamentosController::class, 'edit'])->where('id','[0-9]+')->name('orcamentos-edit');
    Route::put('/{id}',[OrcamentosController::class, 'update'])->where('id','[0-9]+')->name('orcamentos-update');
    Route::delete('/{id}',[OrcamentosController::class, 'destroy'])->where('id','[0-9]+')->name('orcamentos-destroy');
    Route::get('/search',[OrcamentosController::class, 'search'])->name('orcamentos-search');
});

Route::fallback(function(){
    return 'Erro!';
});