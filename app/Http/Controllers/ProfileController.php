<?php

namespace App\Http\Controllers;

use App\Profile;
use App\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function getProfile(){

        $userID = auth()->user()->id;

        $user = User::with('profile')->where('id', $userID)->first();

        return view('profile.index')->with('user', $user);
    }

    public function update(Request $request){

        $profile = $request->only(['name','about', 'phone_number', 'skills','email','area']);
        
        request()->validate([
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if ($request->hasFile('image')) {

            // Get file name with extension 
            $fileNameWithExt = $request->file('image')->getClientOriginalName();

            //Get just filename 
            $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);

            // Get just ext 
            $extension = $request->file('image')->getClientOriginalExtension();

            // Filename to store 
            $fileNameToStore = $fileName.'_'.time().'.'.$extension; 
            
            // Upload Image  
            $path = $request->file('image')->storeAs('public/profiles', $fileNameToStore);

        }else {
            $fileNameToStore = 'no_image.jpg';
        }

        $profile['image'] = $fileNameToStore; 

        $userID = auth()->user()->id;

        User ::where('id', $userID)->update(['name' => $profile['name']]);
        
        Profile::where('user_id', $userID)->update([

            'about' => $profile['about'],
            'phone_number' => $profile['phone_number'],
            'skills' => $profile['skills'],
            'email' => $profile['email'], 
            'area' => $profile['area'],
            'image' => $profile['image']
        ]);

        return redirect()->back()->with('success', 'Profile Updated Sucessfully!');


        }

}
