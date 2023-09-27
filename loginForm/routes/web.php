<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FileUploadController;
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
    return view('welcome');
});
Route::get('/login', function () {
    return view('login');
});
Route::get('/registration', function () {
    return view('registration');
});
Route::get('/layout', function () {
    return view('layout');
});

Route::get('/fileupload', [FileUploadController::class, 'fileuploadView'])->name('fileupload');
Route::post('/fileupload', [FileUploadController::class, 'uploadFile'])->name('fileupload');






