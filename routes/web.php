<?php

use App\Http\Controllers\CourseController;
use App\Http\Controllers\MaterialController;
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

// Route::get('/', function () {
//     return view('course.index');
// });

// Route::get('/courses/{course}/material/create',[MaterialController::class,'create'])->name('materials.create');
// // Route::get('/course/{course}/post/create', [PostController::class, 'create'])->name('post.create');
// Route::get('/courses/materials/create',[MaterialController::class,'create'])->name('materials.store');
Route::resource('/courses',CourseController::class);
Route::resource('/course/{course}//materials',MaterialController::class);


