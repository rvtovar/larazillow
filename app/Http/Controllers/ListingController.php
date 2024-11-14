<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\Request;

class ListingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return inertia(
            'Listing/Index',
            [
                'listings' => Listing::all()
            ]
        );
    }


    /**
     * Display the specified resource.
     */
    public function show(Listing $listing)
    {
        return inertia(
            'Listing/Show',
            [
                'listing' => $listing
            ]
        );
    }

    public function create(){
        return inertia('Listing/Create');
    }

    public function store(Request $request){
        Listing::create(
            $request->validate([
                'beds'=> 'required|integer|min:0|max:10',
                'baths'=> 'required|integer|min:0|max:10',
                'area'=> 'required|integer|min:0|max:10000',
                'city'=> 'required|string|max:255',
                'street'=> 'required|string|max:255',
                'code'=> 'required|string|max:255',
                'street_nr'=> 'required|integer|min:0|max:1000',
                'price'=> 'required|integer|min:0|max:1000000'
            ])
        );
        return redirect()->route('listings.index')
            ->with('success', 'Listing created successfully.');


    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
