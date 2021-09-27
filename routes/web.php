<?php

use App\Http\Controllers\Band\{BandController, GenreController, AlbumController, LyricController };
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Auth::routes();

Route::get('/', HomeController::class)->name('home');

Route::middleware('auth')->group(function () {
    Route::get('dashboard', DashboardController::class)->name('dashboard');

    Route::prefix('band')->group(function () {
        Route::get('table', [BandController::class, 'table'])->name('bands.table');
        Route::get('create', [BandController::class, 'create'])->name('bands.create');
        Route::put('create', [BandController::class, 'store'])->name('bands.store');
        Route::get('{band:slug}/edit', [BandController::class, 'edit'])->name('bands.edit');
        Route::put('{band:slug}/edit', [BandController::class, 'update'])->name('bands.update');
        Route::delete('{band:slug}/delete', [BandController::class, 'destroy'])->name('bands.delete');
        Route::get('{band:slug}/detail', [BandController::class, 'detail'])->name('bands.show');
    });

    Route::prefix('album')->group(function () {
        Route::get('create', [AlbumController::class, 'create'])->name('album.create');
        Route::put('create', [AlbumController::class, 'store'])->name('album.store');
        Route::get('table', [AlbumController::class, 'table'])->name('album.table');
        Route::get('{album:slug}/edit', [AlbumController::class, 'edit'])->name('album.edit');
        Route::put('{album:slug}/edit', [AlbumController::class, 'update'])->name('album.update');
        Route::delete('{album:slug}/delete', [AlbumController::class, 'destroy'])->name('album.delete');
        Route::get('search', [AlbumController::class, 'search'])->name('album.search');
    });


    Route::prefix('genre')->group(function () {
        Route::get('create', [GenreController::class, 'create'])->name('genre.create');
        Route::put('create', [GenreController::class, 'store'])->name('genre.store');
        Route::get('table', [GenreController::class, 'table'])->name('genre.table');
        Route::get('{genre:slug}/edit', [GenreController::class, 'edit'])->name('genre.edit');
        Route::put('{genre:slug}/edit', [GenreController::class, 'update'])->name('genre.update');
        Route::delete('{genre:slug}/delete', [GenreController::class, 'destroy'])->name('genre.delete');
    });

    Route::prefix('lyric')->group(function () {
        Route::get('create', [LyricController::class, 'create'])->name('lyric.create');
        Route::put('create', [LyricController::class, 'store'])->name('lyric.store');
        Route::get('table', [LyricController::class, 'table'])->name('lyric.table');
        Route::get('{band:slug}/table', [LyricController::class, 'detail'])->name('lyric.detail');
    });
});