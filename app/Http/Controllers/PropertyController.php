<?php

namespace App\Http\Controllers;

use Image;
use App\Location;
use App\Property;
use Carbon\Carbon;
use Illuminate\Http\Request;

class PropertyController extends Controller
{
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
        return back()->with('success', 'Property Added Successfully!');
    }
}
