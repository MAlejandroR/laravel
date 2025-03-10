<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlumnoController;

Route::get('/', function () {
    return view('main');
})->name("main");

Route::resource("alumnos", AlumnoController::class)->middleware('auth');

//Route::get("/alumnos",[AlumnoController::class, "index"])
//    ->name("alumnos")
//    ->middleware("auth");
//;

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::view("about", "about");
Route::post("aulumo", fn()=>view("about"))->middleware("peope");
Route::view("noticias", "noticias");
require __DIR__.'/auth.php';
