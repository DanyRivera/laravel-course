<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

/*
 * Route::get = Consulta 
 * Route::post = Guarda 
 * Route::delete = Elimina 
 * Route::put = Actualiza 
 */

 /*
    Route::get('/', [PageController::class, 'home'])->name('home');

    Route::get('/blog', [PageController::class, 'blog'])->name('blog');

    Route::get('/blog/{slug}', [PageController::class, 'home'])->name('post');
*/

/*
* Grupo de rutas para un solo controlador 
*/

Route::controller(PageController::class)->group(function() {

    Route::get('/',         'home')->name('home');
    Route::get('blog',      'blog')->name('blog');
    Route::get('blog/slug', 'post')->name('post');

});