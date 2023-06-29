<?php

namespace App\Http\Controllers;
use App\Models\Listing;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

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

    //Store listing Data
    public function store(Request $request) {
        //dd($request->all());
        $formFields = $request->validate([
            'title' => 'required',
            'company' => ['required', Rule::unique('listings','company')],
            'location' => 'required',
            'website' => 'required',
            'email' => ['required','email'],
            'tags' => 'required',
            'description' => 'required'
        ]);

        Listing::create($formFields);

        return redirect('/')->with('message','Listing created succesfully');
    }
}
