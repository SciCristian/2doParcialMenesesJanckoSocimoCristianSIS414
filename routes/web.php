<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TelevisorController;

// Redirige al listado de televisores al ingresar al sitio principal
Route::get('/', function () {
    return redirect()->route('televisores.index');
});

Route::resource('televisores', TelevisorController::class);
