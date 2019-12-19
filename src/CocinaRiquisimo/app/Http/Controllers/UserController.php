<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Auth;
use Image;

class UserController extends Controller
{
    //
    public function profile(){
        return view('profile.profile', array('user' => Auth::user()) );
    }
    public function update(Request $request){
        //actualización de datos
        if($request->hasFile('photo')){
            $photo = $request->file('photo');
            $filename = time() . "_" . $photo->getClientOriginalExtension();
            Image::make($photo)->resize(300, 300)->save(public_path('img/profile/'. $filename));

            $user = Auth::user();
            $user->photo = $filename;
            $user->save();

        }

    }
}
