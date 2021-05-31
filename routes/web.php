<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\FileController;


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
Route::get('/files/cargar', [TestController::class, 'cargar'])->name('/files/cargar');
Route::get('/files/create', [TestController::class, 'create'])->name('/files/create');
Route::get('/files/index', [TestController::class, 'index'])->name('/files/index');
Route::get('/tests/create', [TestController::class, 'create'])->name('/tests/create');
Route::get('/tests/index', [TestController::class, 'index'])->name('/tests/index');
Route::get('/tests/readcsv', [TestController::class, 'readCSV'])->name('/tests/readcsv');
Route::get('/tests/zip', [TestController::class, 'zip'])->name('/tests/zip');

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();



Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resources([
    'test'  => TestController::class,
    'files' => FileController::class, //Agregar la ruta de files
]);



