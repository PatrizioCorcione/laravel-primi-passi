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

Route::get('/', function () {
    return view('home', ['title' => 'Benvenuti', 'description' => 'lorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsum']);
})->name('home');
Route::get('/Su-di-noi', function () {
    $origin = 'lorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsum';
    $founder = 'Piccio Pasticcio';
    return view('about-us', compact('origin', 'founder'));
})->name('about-us');
Route::get('/sponsor', function () {
    $data = [
        (object) [
            'name' => 'strozzini',
            'logo' => 'io sono un immagine',
            'time' => '3 year'
        ],
        (object) [
            'name' => 'creativi',
            'logo' => 'io sono un immagine',
            'time' => '5 year'
        ],
        (object) [
            'name' => 'diversi',
            'logo' => 'io sono un immagine',
            'time' => '1 year'
        ],
    ];
    return view('sponsor', ['data' => $data]);
})->name('sponsor');
