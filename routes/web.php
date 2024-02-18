<?php

use App\Http\Controllers\AuthSongController;
use App\Http\Controllers\SongController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/',[SongController::class,'index'])->name("home");

Route::post('/createNewSong',[AuthSongController::class,'createNewSong'])->name("createNewSong");
Route::get('/add',[AuthSongController::class,'addSong'])->name("addSong");

Route::get('/edit/{id}',[AuthSongController::class,'editSong'])->name("editSong");
Route::post('/saveSongChanges',[AuthSongController::class,'saveSongChanges'])->name("saveSongChanges");
Route::get('/remove/{id}',[AuthSongController::class,'removeSong'])->name("removeSong");


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
