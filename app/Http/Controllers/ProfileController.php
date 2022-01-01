<?php

namespace App\Http\Controllers;

use App\User;
use App\Rules\UsernameRule;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\{Auth, Hash, Session};

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('profile.index', [
            'user' => User::find(Auth::id())
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:191', new UsernameRule],
            'email' => ['required','email', 'unique:users,email,'.$id]
        ]);

        $user = User::find($id);
        if($user->name != Str::title($request->name)){
            $user->name = Str::title($request->name);
            Session::flash('name_status', 'Your Name Changed Successfully!');
        }
        if($user->email != $request->email){
            $user->email = $request->email;
            Session::flash('email_status', 'Your Email Changed Successfully!');
        }
        $user->save();
        return back();
    }
    public function passwordupdate(Request $request)
    {
        // return $request;
        $request->validate([
            'old_password' => 'required',
            'password' => 'required|confirmed|different:old_password|alpha_num|min:8',
            'password_confirmation' => 'required'
        ]);
        if(Hash::check($request->old_password, Auth::user()->password)){
            User::find(Auth::id())->update([
                'password' => Hash::make($request->password)
            ]);
            return back()->with('password_change_success', 'Your Password Changed Successfully!');
        }
        else{
            return back()->with('old_password_not_match', 'Your Provided Old Password Does Not Match');
        }
    }
    public function avatarupdate(Request $request){
        $request->validate([
            'avatar' => 'required|image'
        ],
        [
            'avatar.image' => 'Your uploaded file must be jpeg, png, bmp, gif, svg, or webp'
        ]);
        $uploaded_avatar = $request->file('avatar');
        $new_file_name = Auth::id()."-".time().".".$uploaded_avatar->getClientOriginalExtension();
        $new_file_location = 'uploads/avatars/'.$new_file_name;
        if(Auth::user()->avatar != 'defaultavatar.png'){
            unlink(public_path('uploads/avatars/'.Auth::user()->avatar));
        }
        Image::make($uploaded_avatar)->resize(400, 400)->save(public_path($new_file_location), 75);
        User::find(Auth::id())->update([
            'avatar' => $new_file_name
        ]);
        return back()->with('avatar_status', 'Your Photo Changed Successfully!');
    }
}
