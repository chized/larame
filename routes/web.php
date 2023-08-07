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
Route::get('/listings/create', [ListingController::class, 'create'])->middleware('auth');

//the ->Middleware('auth') makes the route only accessible to logged in user

//Store listing data
Route::post('/listings', [ListingController::class, 'store'])->middleware('auth');

//Show edit forms
Route::get('/listings/{listing}/edit', [ListingController::class, 'edit'])->middleware('auth');

//Update listing data
Route::put('listings/{listing}', [ListingController::class, 'update'])->middleware('auth');

//Delete listing data
Route::delete('listings/{listing}', [ListingController::class, 'destroy'])->middleware('auth');

//Manage Listings
Route::get('/listings/manage', [ListingController::class, 'manage'])->middleware('auth');

//Single Listing
Route::get('/listings/{listing}', [ListingController::class, 'show']);

//Show Register/Create Form
Route::get('/register', [UserController::class, 'create'])->middleware('guest');
//->middleware('guest') this ensures that the logged in does see the register page

//Create new user
Route::post('/users', [UserController::class, 'store']);

//Log user out
Route::post('/logout', [UserController::class, 'logout'])->middleware('auth');

//Show login form
Route::get('/login', [UserController::class, 'login'])->name('login')->middleware('guest');
//->name('login') is used so that middleware auth can find the login route (learnt for laragig traversy tutorial)

// Login user
Route::post('/users/authenticate', [UserController::class, 'authenticate']);

