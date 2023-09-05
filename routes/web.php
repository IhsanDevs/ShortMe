<?php

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

// get all subdomain for shorturl then redirect
Route::domain('{code}.'.config('app.domain'))
->group(function ()
{
    Route::get('/', [\App\Http\Controllers\ShortLinkController::class, 'show'])
        ->name('generate.shorten.link.get');
})->name('generate.shorten.link.get');

Route::get('/', function () {
    return view('create_short');
})->name('home');

Route::post('/short', [\App\Http\Controllers\ShortLinkController::class, 'store'])
    ->name('generate.shorten.link.post');

//Route::get('/s/{code}', [\App\Http\Controllers\ShortLinkController::class, 'show'])
//    ->name('generate.shorten.link.get');
