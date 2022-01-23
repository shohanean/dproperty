<?php

namespace App\Http\Controllers;

use App\Location;
use App\Property;
use Carbon\Carbon;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Image;

class FrontendController extends Controller
{
    public function index()
    {
        $locations = Location::all();
        $properties = Property::latest()->get();
        return view('frontend.index', compact('locations', 'properties'));
    }
    public function about()
    {
        return view('frontend.about');
    }
    public function contact_us()
    {
        return view('frontend.contact');
    }
    public function propertydetails($id)
    {
        $property = Property::find($id);
        return view('frontend.propertydetails', compact('property'));
    }
}
