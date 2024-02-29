<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

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

// Route::get('/', function () {
//     return view('welcome');
// });


//call The Controller Out
Route::get('/',[PageController::class,'index1'])->name('home');

Route::get('/users/{id}/{name}', function ($id, $name) {
    return 'this is user ' . $name . 'with an id is' . $id;
});

Route::get('/sb',[PageController::class,'about'])->name('home');
Route::get('/sa',[PageController::class,'sa']);