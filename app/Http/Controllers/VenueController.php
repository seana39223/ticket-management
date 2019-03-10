<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Venue;

class VenueController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show all venues.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $venues = Venue::all();

        return view('venues.index', compact('venues'));
    }

    /**
     * Show the create a new venue page.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function create()
    {
        return view('venues.create', compact('venues'));
    }

    public function store()
    {
        $venue = new Venue();
        $venue->name = request('name');
        $venue->address1 = request('address1');
        $venue->address2 = request('address2');
        $venue->postcode = request('postcode');
        $venue->city = request('city');
        $venue->country = request('country');
        $venue->save();
        return redirect('/venues');
    }

}
