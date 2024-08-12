<?php

use App\Http\Controllers\StudentsController;
use App\Http\Controllers\TrackController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Route::put('/students/{id}',[StudentsController::class,'update'])->name('students.update');
Route::get('/students',[StudentsController::class,'index'])->name('students.index');
Route::put('/students/{id}',[StudentsController::class,'update'])->name('students.update');
Route::get('/students/{id}/edit',[StudentsController::class,'edit'])->name('students.edit');
Route::post('/students/store',[StudentsController::class,'store'])->name('students.store');
Route::get('/students/create',[StudentsController::class,'create'])->name('students.create');
Route::get('/students/{id}',[StudentsController::class,'show'])->name('students.show');
Route::delete('/students/{id}',[StudentsController::class,'destroy'])->name('students.destroy');

/** Controller resource => build cruds function
 * route resource => build routes
 */
// create table tracks

/**
 * migration
 * model
 * store => seeder , factory (fack data)
 * controller => cruds
 */


 // route resource
 Route::resource('tracks',TrackController::class);

/*
  GET|HEAD        tracks ........... tracks.index › TrackController@index
  POST            tracks ........... tracks.store › TrackController@store
  GET|HEAD        tracks/create .. tracks.create › TrackController@create
  GET|HEAD        tracks/{track} ..... tracks.show › TrackController@show
  PUT|PATCH       tracks/{track} . tracks.update › TrackController@update
  DELETE          tracks/{track} tracks.destroy › TrackController@destroy
  GET|HEAD        tracks/{track}/edit tracks.edit › TrackController@edit
*/
