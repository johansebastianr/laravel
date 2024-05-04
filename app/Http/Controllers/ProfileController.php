<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Profile;

class ProfileController extends Controller
{
    public function create(){
       
        $users = User::all();
        $profiles = Profile::all();
       
       return view('profile.create',compact('users','profiles'));

    }
//Store
    public function store(Request $request){
       
        $profile= new Profile();

        $profile->user_id=$request->user_id;//llave foranea
        $profile->title=$request->title;
        $profile->biografia=$request->biografia;
        $profile->website=$request->website;
        $profile->save();
       
        return $profile;

    }
}
