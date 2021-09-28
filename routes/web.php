<?php

use App\Http\Controllers\TaskController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [TaskController::class, "index"])->name("index");

Route::get('/Credits', function () {
    return view("creditos");
})->name('credits');

Route::get('/Create', [TaskController::class, "newTask"])->name("newTask");

Route::post('/Create', [TaskController::class, "insertTask"])->name("insertTask");

Route::get('/Edit/{task}', [TaskController::class, "edit"])->name("editTask");

Route::put('/Edit/{task}', [TaskController::class, "editTask"])->name("editTaskPost");

Route::get('Delete/{id}',[TaskController::class, "deleteByID"])->name("delete");

