<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FormTaskController;
use App\Http\Controllers\AddTaskController;
use App\Http\Controllers\AddEventCalendarController;
use App\Http\Controllers\EventCalendarController;
use App\Http\Controllers\PostforumController;
use App\Http\Controllers\WorkspaceController;
use App\Http\Controllers\TrackgressController;
use App\Http\Controllers\SnmergeController;
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

Route::get('/merger', [SnmergeController::class, 'index']);
Route::post('/merger', [SnmergeController::class, 'submit'])->name('merge.pdf');


Route::get('/', function () {
    return view('welcome');
});


Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');
Route::get('/formtask', [FormTaskController::class, 'formtask'])->name('formtask');
// Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register_process', [RegisterController::class, 'register'])->name('register_process');
// Route::get('/listmytask', [RegisterController::class, 'registered']);

Route::get('/login', function () {
    return view('login');
});
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/forum', function () {
    return view('forum');
});

// Route::get('/history', function () {
//     return view('history');
// });

Route::get('/trackgress', function () {
    return view('trackgress');
});

Route::controller(AddTaskController::class)->group(function () {
    Route::get('/listmytask/{userid}', 'index1')->name('index1');
    Route::get('/history/{userid}', 'index2');
    Route::get('/addmytask', 'add1');
    Route::get('/addmytasktodo', 'add2');
    Route::post('/addmytask/store1', 'store1');
    Route::post('/done/store', 'store2');
    Route::post('/addmytask/store3', 'store3');
});

Route::controller(EventCalendarController::class)->group(function () {
    Route::get('/calendar', 'index');
    Route::post('/calendar/store', 'store');
});

Route::get('/trackgress', [TrackgressController::class, 'index'])->name('trackgress');

Route::controller(PostforumController::class)->group(function () {
    Route::get('/isiforum', 'index');
    Route::get('/formforum', 'index');
    Route::post('/isiforum/store1', 'store1');
    Route::post('/isiforum/store2', 'store2');
});

Route::controller(WorkspaceController::class)->group(function () {
    Route::get('/dashboardworkspace/{userid}', 'index1');
    Route::get('/workspace', 'index2');
    // Route::get('/history', 'index3');
    Route::get('/workspace/form', 'show1');
    Route::get('workspace/task/form', 'show2');
    Route::get('/workspace/{workspaceId}', 'show3');
    Route::post('/workspace/form/store', 'store1');
    Route::post('/workspace/task/form/store', 'store2');
});
