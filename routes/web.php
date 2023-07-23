<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SaveDataController;
use App\Http\Controllers\ClientsController;
use App\Http\Controllers\TasksController;
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

// Route::group(['middleware' => ['auth', 'can:isAdmin']], function () {
//     Route::get('/contact', [SaveDataController::class,'pages.contact']);

// });

Route::get('/add-client', [ClientsController::class,'add_client']);

Route::get('/dashboard', function () {
    $clients = DB::table('clients')->get();
    
    return view('pages.dashboard',[
        "clients" => $clients
    ]);

})->middleware(['auth', 'verified'])->name('dashboard');

// Auth Routes
Route::middleware('auth')->group(function () {
    Route::post('/add-client', [ClientsController::class, 'store']);
    Route::get('/add-client', [ClientsController::class, 'add_client']);
    Route::get('/todo', [TasksController::class,'to_do']);
    Route::post('/todo', [TasksController::class, 'store']);

    // Profile Routes
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';