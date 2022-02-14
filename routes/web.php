<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NavController;
use App\Http\Controllers\ActionController;
use App\Models\Article;
use App\Http\Controllers\MailController;


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

// Route::get('/',[NavController::class,'home']);
Route::get('tarifs',[NavController::class,'showPrice']);
Route::get('planning',[NavController::class,'showPlanning']);
Route::get('actualites',[NavController::class,'showActualities']);
Route::get('contact',[NavController::class,'showContact']);

Route::get('updateActu/{id}',[NavController::class,'updateActu']);
Route::post('/actualites/{id}',[ActionController::class,'updateActu']);

Route::post('/deleteActu', [ActionController::class,'delete']);
Route::post('/actualites',[ActionController::class,'add']);

Route::get('/connexion',[NavController::class,'connexion']);
Route::post('/',[ActionController::class,'connexion']);

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    $articles = Article::all();      
    if(!Gate::allows('access-admin')){abort('403');}
    return view('dashboard', ['articles' => $articles]);
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::get('/adminActu', function () {
    $articles = Article::all();
    if (!Gate::allows('access-admin')) {
        abort('403');
    }
    return view('adminActu', ['articles' => $articles]);
})->middleware(['auth'])->name('adminActu');

require __DIR__.'/auth.php';

Route::get('/addActu', function () {
    if (!Gate::allows('access-admin')) {
        abort('403');
    }
    return view('addActu');
})->middleware(['auth'])->name('addActu');

require __DIR__.'/auth.php';

Route::post('/sendmail',[MailController::class,'mail']);
