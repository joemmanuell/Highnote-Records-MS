<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArtistController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\MusicController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;


// Web Route
// Here is where you can register web routes for your application.
// These routes are loaded by the RouteServiceProvider within a group
// which contains the "web" middleware group. Now create something great.

Route::get('/register', function () {
    return view('auth/register');
});

Route::get('/addrevenue', function () {
    return view('forms/addrevenue');
});


Route::get('/addartist', [ArtistController::class, 'addartist'])->name('forms.addartist');
Route::get('/addevent', [EventController::class, 'addevent'])->name('forms.addevent');
Route::get('/addmusic', [MusicController::class, 'addmusic'])->name('forms.addmusic');
Route::get('/man', [RoleController::class, 'viewmanager'])->name('main.manager');
Route::get('/acc', [RoleController::class, 'viewaccountant'])->name('main.accountant');
Route::get('/art', [RoleController::class, 'viewartist'])->name('main.artist');
Route::get('/admin', [AdminController::class, 'viewadmin'])->name('main.admin');
Route::get('/', [AuthController::class, 'viewlogin'])->name('auth.login');
Route::get('/resetpassword', [AuthController::class, 'viewresetpassword'])->name('auth.passwordreset');
Route::get('/error', [AuthController::class, 'view404'])->name('404');
Route::get('/register', [AuthController::class, 'viewregister'])->name('auth.register');

//get user values from users table in db to admin view
Route::get('/admin', [AdminController::class, 'admin'])->name('main.admin');
//edit user in UI
Route::get('/admin/{user}/edit', [AdminController::class, 'edituser'])->name('main.edituser');
//update edited user in DB
Route::put('/admin/{user}/update', [AdminController::class, 'updateuser'])->name('main.updateuser');



Route::post('/register', [AuthController::class, 'userstore'])->name('auth.userstore');
//Route::post('/admin', [AdminController::class, 'admin'])->name('main.admin');

