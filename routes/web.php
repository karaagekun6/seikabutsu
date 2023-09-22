<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RecordController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TrainingmenuController;
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


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::controller(RecordController::class)->middleware(['auth'])->group(function(){
    Route::get('/','index')->name('index');
    Route::post('/records', 'store')->name('store');
    Route::get('/records/create', 'create')->name('create');
    Route::get('/records/{record}', 'show')->name('show');
    Route::put('/records/{record}', 'update')->name('update');
    Route::delete('/records/{record}', 'delete')->name('delete');
    Route::get('/records/{record}/edit', 'edit')->name('edit');
});

Route::controller(UserController::class)->middleware(['auth'])->group(function(){
    Route::post('/users', 'userstore')->name('userstore');
    Route::get('/users/usercreate','usercreate')->name('usercreate'); 
    Route::get('/users/{user}', 'usershow')->name('usershow');
    Route::put('/users/{user}', 'userupdate')->name('userupdate');
    Route::delete('/users/{user}', 'userdelete')->name('userdelete');
    Route::get('/users/{user}/useredit', 'useredit')->name('useredit');
});


    



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


require __DIR__.'/auth.php';


