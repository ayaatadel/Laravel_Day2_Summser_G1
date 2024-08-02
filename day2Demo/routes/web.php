<?php

use App\Http\Controllers\StudentsController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/students',[StudentsController::class,'index'])->name('students.index');
Route::get('/students/{id}',[StudentsController::class,'show'])->name('students.show');
Route::delete('/students/{id}',[StudentsController::class,'destroy'])->name('students.destroy');
