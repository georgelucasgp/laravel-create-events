<?php

use App\Http\Controllers\EventController;
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

Route::get('/', [EventController::class, 'index' ]);
Route::get('/events/create', [EventController::class, 'create' ])->middleware('auth');
Route::get('/events/{id}', [EventController::class, 'show' ]);
Route::post('/events', [EventController::class, 'store' ]);
Route::get('/events/edit/{id}', [EventController::class, 'edit' ])->middleware('auth');
Route::delete('/events/{id}', [EventController::class, 'destroy' ])->middleware('auth');
Route::get('/dashboard', [EventController::class, 'dashboard' ])->middleware('auth');
Route::put('/events/update/{id}', [EventController::class, 'update' ])->middleware('auth');

Route::post('/events/join/{id}', [EventController::class, 'joinEvent' ])->middleware('auth');
