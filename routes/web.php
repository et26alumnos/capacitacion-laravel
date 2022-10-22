<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\SectionController;

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


// Rutas de materias

Route::get('/subject/{load?}', [SubjectController::class, 'index']);

Route::get('/subject/{id}', [SubjectController::class, 'show'])->where('id', '[0-9]+');

Route::get('/subject/new', [SubjectController::class, 'create']);

Route::post('/subject', [SubjectController::class, 'store']);

Route::get('/subject/{id}/edit', [SubjectController::class, 'edit'])->where('id', '[0-9]+');

Route::put('/subject/{subject}', [SubjectController::class, 'update']);

Route::delete('/subject/{id}', [SubjectController::class, 'destroy'])->where('id', '[0-9]+');


// Rutas de divisiones 
// Creo grupo de rutas que comparten el mismo controller
Route::controller(SectionController::class)->group(function(){ 
    Route::get('/sections', 'index');
    Route::get('/sections/{id}', 'show');

    Route::get('/sections/create', 'create');
    Route::post('/sections', 'store');

    Route::get('/sections/{id}/edit', 'edit');
    Route::put('/sections/{id}', 'update');

    Route::delete('/sections/delete/{id}', 'destroy');
});
//Route::resource('sections', SectionController::class);