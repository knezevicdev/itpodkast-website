<?php

use App\Http\Controllers\RssFeedController;
use App\Http\Controllers\WebsiteController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [WebsiteController::class, 'index'])->name('home');
Route::get('/epizode', [WebsiteController::class, 'epizode'])->name('epizode');
Route::get('/epizode/{slug}', [WebsiteController::class, 'epizoda'])->name('epizoda');
Route::get('/kontakt', [WebsiteController::class, 'kontakt'])->name('kontakt');
Route::get('/rss-feed', [RssFeedController::class, 'generate'])->name('rss-feed');
