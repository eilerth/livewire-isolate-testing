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

Route::get('/example-a', \App\Livewire\ExampleA::class);
Route::get('/example-b', \App\Livewire\ExampleB::class);
Route::get('/example-c', \App\Livewire\ExampleC::class);
Route::get('/example-d', \App\Livewire\ExampleD::class);

Route::get('/', function () {
    return view('welcome');
});
