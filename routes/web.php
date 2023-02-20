<?php

use Illuminate\Support\Facades\Route;
use App\Http\controllers\HomeController;
use App\Http\controllers\ShowController;

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

// Route::get('/', function () {
//     return view('welcome');
// });


// Route::get('/',[HomeController::class, 'index'])->name('index');

// insert data into database
Route::post("/index", [HomeController::class, "storeData"])->name("student.create");
Route::get('/search',[ShowController::class, "search"])->name('student.search');
// display data into monitor
Route::get("/", [ShowController::class, "show"])->name('student.show');