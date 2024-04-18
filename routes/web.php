<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsController;

Route::get('/', [ProductsController::class, 'index'])->name('produtos');
Route::get('produtos/novo', [ProductsController::class, 'create'])->name('create');
Route::post('produtos/novo', [ProductsController::class, 'store'])->name('registrar_produtos');
Route::get('produtos/editar/{id}', [ProductsController::class, 'edit'])->name('editar_produtos');
Route::post('produtos/editar/{id}', [ProductsController::class, 'update'])->name('alterar_produto');
Route::get('produtos/excluir/{id}', [ProductsController::class, 'delete']);
Route::delete('produtos/excluir/{id}', [ProductsController::class, 'destroy'])->name('excluir_produto');