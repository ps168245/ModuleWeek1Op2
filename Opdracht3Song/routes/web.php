<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SongController;
use App\Http\Controllers\BandController;
use App\Http\Controllers\AlbumController;
use Illuminate\Http\Request;

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


////// SONGS

Route::get('/songs/create', [SongController::class, 'create'])->Name('song');


// redirect van songcontroller
Route::get('/songs/{index}', [SongController::class, 'show'])->Name('SongIndex');



Route::get('/songs/{index}/edit', [SongController::class, 'edit'])->Name('song.edit');


Route::get('/songs', [SongController::class, 'index'])->Name('songs.index');

Route::post('/songs', [SongController::class, 'store'])->name('songs.store');

Route::put('/songs/{id}', [SongController::class, 'update'])->name('songs.update');

Route::get('/songs/{index}/delete', [SongController::class, 'destroy'])->Name('songs.destroy');







////// ALBUMS
Route::get('/albums/create', [AlbumController::class, 'create'])->Name('song');





// redirect van songcontroller
Route::get('/albums/{index}', [AlbumController::class, 'show'])->Name('AlbumIndex');



Route::get('/albums/{index}/edit', [AlbumController::class, 'edit'])->Name('album.edit');


Route::get('/albums', [AlbumController::class, 'index'])->Name('albums.index');

Route::post('/albums', [AlbumController::class, 'store'])->name('albums.store');

Route::put('/albums/{id}', [AlbumController::class, 'update'])->name('albums.update');

Route::get('/albums/{index}/delete', [AlbumController::class, 'destroy'])->Name('albums.destroy');




////// BANDS
Route::get('/bands/create', [BandController::class, 'create'])->Name('band');


// redirect van songcontroller
Route::get('/bands/{index}', [BandController::class, 'show'])->Name('BandIndex');



Route::get('/bands/{index}/edit', [BandController::class, 'edit'])->Name('band.edit');


Route::get('/bands', [BandController::class, 'index'])->Name('bands.index');

Route::post('/bands', [BandController::class, 'store'])->name('bands.store');

Route::put('/bands/{id}', [BandController::class, 'update'])->name('bands.update');

Route::get('/bands/{index}/delete', [BandController::class, 'destroy'])->Name('bands.destroy');
