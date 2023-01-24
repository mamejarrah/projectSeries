<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\FilmController;

use App\Http\Controllers\CategorieController;

use App\Http\Controllers\ActeurController;





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

//routes films

Route::get('/films', [FilmController::class, 'index']);


Route::get('films/create',[FilmController::class,'create'] );


Route::post('/films',[FilmController::class, 'store' ] )->name('create');


Route::get('films/profile/{id}', [FilmController::class,'show'])->name('show');


Route::get('films/{id}', [FilmController::class, 'edit'])->name('edit_films');


Route::put('films/{id}', [FilmController::class, 'update'])->name('films.update');


Route::delete('films/{id}', [FilmController::class, 'destroy'])->name('delete_films');

//Route::get('categorie/{description}/films', [FilmController::class, 'index'])->name('films.categorie');


//routes categories

Route::get('/categories', [CategorieController::class, 'indexc']);


Route::get('categories/createc',[CategorieController::class,'createc'] );


Route::post('/categories',[CategorieController::class, 'storec' ] )->name('createc');

Route::get('categories/profile/{id}', [CategorieController::class,'showc'])->name('showc');

Route::get('categories/{id}', [CategorieController::class, 'editc'])->name('editc_categories');

Route::put('categories/{id}', [CategorieController::class, 'updatec'])->name('categories.update');

Route::delete('categories/{id}', [CategorieController::class, 'destroyc'])->name('deletec_categories');


//routes Acteurs

Route::get('/acteurs', [ActeurController::class, 'indexa']);


Route::get('acteurs/createa',[ActeurController::class,'createa'] );

Route::post('/acteurs',[ActeurController::class, 'storea' ] )->name('createa');

Route::get('acteurs/profile/{id}', [ActeurController::class,'showa'])->name('showa');

Route::get('acteurs/{id}', [ActeurController::class, 'edita'])->name('edita_acteurs');

Route::put('acteurs/{id}', [ActeurController::class, 'updatea'])->name('acteurs.update');

Route::delete('acteurs/{id}', [ActeurController::class, 'destroya'])->name('deletea_acteurs');

















 

