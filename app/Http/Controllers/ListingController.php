<?php

namespace App\Http\Controllers;
use App\Models\Listing;
use Illuminate\Http\Request;

class ListingController extends Controller
{
    //To Show all listings
    public function index() {
        //dd(request('tag'));
        return view('listings.index', [
            // 'heading' => 'Latest Listings',
             //'listings' => Listing::all()
            'listings' => Listing::latest()->filter(request(['tag', 'search']))->get()
         ]);
    }

    //To show single listing
    public function show(Listing $listing) {
        return view('listings.show', [
            'heading' => 'Listing',
            'listing' => $listing
        ]);
    }

    //Show create listings form
    public function create() {
        return view('listings.create');
    }
}
