<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BonekaController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('boneka', BonekaController::class);
Route::delete('boneka/{boneka}/delete', [BonekaController::class, 'destroy'])->name('boneka.destroy');
