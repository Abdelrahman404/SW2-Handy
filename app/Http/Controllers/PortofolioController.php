<?php

namespace App\Http\Controllers;

use App\Portofolio;
use Illuminate\Http\Request;

class PortofolioController extends Controller
{
    public function getPortofolio(){
        
        $projects = Portofolio::where('user_id', auth()->user()->id)->get();

        return view('portofolio.index')->with('projects', $projects);
    }

    public function addPortofolio(){

        return view('portofolio.add');
    }

    public function store(Request $request){

        request()->validate([
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

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
            $path = $request->file('image')->storeAs('public/portfolio', $fileNameToStore);

        }else {
            $fileNameToStore = 'no_image.jpg';
        }

        
        $profile = $request->only(['title', 'description']);

        $profile['image'] = $fileNameToStore; 

        $userID = auth()->user()->id;

        Portofolio::create([

            'user_id' => $userID,
            'title' => $profile['title'],
            'description' => $profile['description'],
            'image' => $profile['image']
        ]);

        return redirect('/portofolio');
    }
}
