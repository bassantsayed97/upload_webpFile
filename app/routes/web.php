<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\imageController;
use App\Models\Image;
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
    return view('home');
});
// Route::get('/all', function () {
//     return view('all_images');
// });
Route::resource('images',imageController::class);