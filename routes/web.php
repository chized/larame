<?php

use Illuminate\Support\Facades\Route;
use App\Models\Listing;
use App\Models\User;
use App\Http\Controllers\UserController;

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


/* Route::get('/', function () {
    return view('welcome');
}); */

/* Common resources routes
Index - Show all listings
show - show single listing
create - show from to create new listing
store - store new listing
edit - show form to edit listing
update - update listing
destroy - Delete Listing */

use App\Http\Controllers\ListingController;
//All listings
Route::get('/',[ListingController::class, 'index']);

//Show Create Listing form
Route::get('/listings/create', [ListingController::class, 'create']);

//Store listing data
Route::post('/listings', [ListingController::class, 'store']);

//Show edit forms
Route::get('/listings/{listing}/edit', [ListingController::class, 'edit']);

//Update listing data
Route::put('listings/{listing}', [ListingController::class, 'update']);

//Delete listing data
Route::delete('listings/{listing}', [ListingController::class, 'destroy']);

//Single Listing
Route::get('/listings/{listing}', [ListingController::class, 'show']);

//Show Register/Create Form
Route::get('/register', [UserController::class, 'create']);

//Create new user
Route::post('/users', [UserController::class, 'store']);

//Log user out
Route::post('/logout', [UserController::class, 'logout']);
