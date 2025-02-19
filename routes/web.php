<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CourttypeController;
use App\Http\Controllers\CourtController;
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

// route::get('/home', function() {
//     return view('home');
// });

// route::get('/project', function() {
//     return view('project');
// });

// route::get('/service', function() {
//     return view('service');
// });

Route::get('/court-type', [CourttypeController::class, 'index']);
Route::post('/court-type', [CourttypeController::class, 'store']);

Route::resource('court', CourtController::class);