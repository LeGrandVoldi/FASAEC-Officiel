<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\MenusController;


Route::post('/contact', [ContactController::class, 'send'])->name('contact.send');


Route::get('/', function () {
    return view('index');
})->name("accueil");

Route::get("/le-fasaec", [MenusController::class, 'index_1' ])->name('');
Route::get("/droits-protection-sociale", [MenusController::class, 'index_2' ])->name('');
Route::get("/artistes-numerique-ia", [MenusController::class, 'index_3' ])->name('');
Route::get("/aides-accompagnement", [MenusController::class, 'index_4' ])->name('');
Route::get("/actualites", [MenusController::class, 'index_5' ])->name('');
Route::get("/gestion-actualites", [MenusController::class, 'index_6' ])->name('');
Route::post("/verifier_email", [MenusController::class, 'index_7' ])->name('verifier.email');
Route::get('/dashboard/{email}', [MenusController::class, 'index_8'])
    ->name('dashboard');
Route::get("/contact", [MenusController::class, 'index_9' ])->name('');
