<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/produtos', [PageController::class, 'products'])->name('products.index');
Route::get('/produto/{slug}', [PageController::class, 'productShow'])->name('products.show');
Route::get('/cidades', [PageController::class, 'cities'])->name('cities.index');
Route::get('/cidade/{slug}', [PageController::class, 'cityShow'])->name('cities.show');
Route::get('/depoimentos', [PageController::class, 'testimonials'])->name('testimonials.index');
Route::get('/contato', [PageController::class, 'contact'])->name('contact');
