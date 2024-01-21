<?php

use App\Http\Controllers\SongController;
use Illuminate\Support\Facades\Route;

Route::get('/',[SongController::class,'index'])->name("home");
//Route::get('/add',"newSong")->name("addForm");
Route::get('/add',[SongController::class,'addSong'])->name("addSong");
Route::get('/saveChanges',[SongController::class,'saveSongChanges'])->name("saveSongChanges");
Route::get('/edit/{id}',[SongController::class,'editSong'])->name("editSong");
Route::get('/remove/{id}',[SongController::class,'removeSong'])->name("removeSong");

