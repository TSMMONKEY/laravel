<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SaveDataController;
use App\Http\Controllers\ClientsController;
use App\Http\Controllers\TasksController;
use App\Http\Controllers\UserHandlerController;
use App\Http\Controllers\CourseController;
use Illuminate\Support\Facades\DB;

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


Route::get('/', [SaveDataController::class,'index']);

Route::post('/', [SaveDataController::class,'store']);

Route::post('/about', [SaveDataController::class,'about']);

Route::get('/about', function () {
    return view('pages.about');
});

Route::get('/contact', function () {
    return view('pages.contact');
});

Route::post('/contact', [SaveDataController::class,'store']);

Route::get('/thank-you', [SaveDataController::class,'thank_you']);

// Admin/Agent Auth Routes
Route::middleware(['auth','is_admin','verified'])->group(function () {
    Route::get('/add-client', [ClientsController::class,'add_client']);

    Route::get('/dashboard', function () {
        $clients = DB::table('clients')->get();
        
        return view('pages.dashboard',[
            "clients" => $clients
        ]);

    })->name('dashboard');

    Route::get('/client/edit/{name}/{id}', [ClientsController::class, 'edit']);
    Route::put('/client/update/{name}/{id}', [ClientsController::class, 'update'])->name('update');
    Route::delete('/client/delete/{name}/{id}', [ClientsController::class, 'destroy'])->name('destroy');
    Route::post('/add-client', [ClientsController::class, 'store']);
    Route::get('/add-client', [ClientsController::class, 'add_client']);
    Route::get('/clients', [ClientsController::class, 'client']);

    Route::get('/todo', [TasksController::class,'to_do']);
    Route::post('/todo', [TasksController::class, 'store']);

});

// user Routes
Route::middleware(['auth'])->group(function(){
    Route::get('/dashboard', [UserHandlerController::class, 'index'])->name('dashboard');

    // Courses
    Route::get('/courses', [CourseController::class, 'index'])->name('courses');
    Route::get('/course/{name}/{id}', [CourseController::class, 'show'])->name('showCourse');
    Route::get('/course/edit/{name}/{id}', [CourseController::class, 'edit'])->name('editCourse');
    Route::get('/course/delete/{name}/{id}', [CourseController::class, 'destroy'])->name('destroyCourse');
});

Route::middleware('auth')->group(function(){
    // Profile Routes
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';