<?php

use App\Http\Controllers\ComicController;
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
    $links = config('db_links');
    $link_footer = config('footer_db');
    $link_fot_mid = config('footer_list_db');
    return view('home',compact('links','link_footer','link_fot_mid'));
})->name('home');

Route::resource('comics', ComicController::class);
