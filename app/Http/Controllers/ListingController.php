<?php

namespace App\Http\Controllers;
use App\Models\Listing;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class ListingController extends Controller
{
    //To Show all listings
    public function index() {
        //dd(Listing::latest()->filter(request(['tag', 'search']))->paginate(2));

        return view('listings.index', [
            // 'heang' => 'Latest Listings',
             //'listings' => Listing::all()
             //'listings' => Listing::latest()->filter(request(['tag', 'search']))->simplePaginate(2)//This will use the Prev and Next buttons to Paginate
            'listings' => Listing::latest()->filter(request(['tag', 'search']))->paginate(5)
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
        //dd($request->file('logo'));
        $formFields = $request->validate([
            'title' => 'required',
            'company' => ['required', Rule::unique('listings','company')],
            'location' => 'required',
            'website' => 'required',
            'email' => ['required','email'],
            'tags' => 'required',
            'description' => 'required'
        ]);

        if($request->hasFile('logo')) {
            $formFields['logo'] = $request->file('logo')->store('logos', 'public');
        }
        Listing::create($formFields);

        return redirect('/')->with('message','Listing created succesfully');
    }

    //Show Edit listing form
    public function edit(Listing $listing){
        //dd($listing);
        return view('listings.edit',[ 'listing' => $listing]);
    }

    //Store listing Data
    public function update(Request $request, Listing $listing) {
        //dd($request->file('logo'));
        $formFields = $request->validate([
            'title' => 'required',
            'company' => ['required'],
            'location' => 'required',
            'website' => 'required',
            'email' => ['required','email'],
            'tags' => 'required',
            'description' => 'required'
        ]);

        if($request->hasFile('logo')) {
            $formFields['logo'] = $request->file('logo')->store('logos', 'public');
        }
        $listing->update($formFields);

        return back()->with('message','Listing updated succesfully');
    }

    public function destroy(Listing $listing) {
        $listing->delete();
        return redirect('/')->with('message', 'Listing Deleted Successfully');
    }

}
