<?php

use App\Http\Controllers\OffreController;
use App\Http\Controllers\CvController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AfficheOffreController;
use App\Http\Controllers\ModifierCvController;

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

Route::get('/home', function () {
    return view('home');
})->middleware('auth')->name('home');



Route::view('/cv/creation', 'pages/cv/creation')->name('creation');

Route::get('/cv/modification', [ModifierCvController::class, "index"])->name('modification');

Route::patch('/cv/modification', [ModifierCvController::class, "update"])->name('modification.update');

Route::view('/pages/publication', 'pages/users/publication')->name('publication');

// Get
Route::get('/offres', [AfficheOffreController::class, "show"])->name('offre');

Route::get('/affichage', [AfficheOffreController::class, "showCv"])->name('affichage');

Route::get('/pages/offres', [OffreController::class, "offres"])->name('offres');

Route::get('/cv/creation', [CvController::class, "cv"])->name('creation');
//Post
Route::post('/pages/offres', [OffreController::class, "addOffre"])->name('offres'); 

Route::post('/cv/creation', [CvController::class, "addCv"])->name('creation');

