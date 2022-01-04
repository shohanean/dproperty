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
    public function addproperty()
    {
        $locations = Location::all();
        return view('frontend.addproperty', compact('locations'));
    }
    public function addpropertypost(Request $request)
    {
        $feature_list = "";
        foreach ($request->features as $feature => $value) {
            $feature_list .= $feature."#";
        }
        $id = Property::insertGetId($request->except('_token', 'features', 'aj-1')+[
            'user_id' => auth()->id(),
            'features' => $feature_list,
            'created_at' => Carbon::now()
        ]);
        if($request->hasFile('property_photo')){
            $uploaded_avatar = $request->file('property_photo');
            $new_file_name = auth()->id()."-".time().".".$uploaded_avatar->getClientOriginalExtension();
            $new_file_location = 'uploads/property_photos/'.$new_file_name;

            Image::make($uploaded_avatar)->resize(1280, 850)->save(public_path($new_file_location));
            Property::find($id)->update([
                'property_photo' => $new_file_name
            ]);
        }
        return back();
    }
    public function propertydetails($id)
    {
        $property = Property::find($id);
        return view('frontend.propertydetails', compact('property'));
    }
}
