<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    $builder = new \AshAllenDesign\ShortURL\Classes\Builder();

    $shortURLObject = $builder->destinationUrl('https://beparibari.com')->secure()->make();
    $shortURL = $shortURLObject->default_short_url;

    return view('welcome', compact('shortURL'));
});
