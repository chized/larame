<?php

use Illuminate\Support\Facades\Route;
use App\Models\Listing;

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

//Single Listing
Route::get('/listings/{listing}', [ListingController::class, 'show']);

//Show Create Listing form
Route::get('/Listings/create', [ListingController::class, 'create']);