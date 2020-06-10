<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Issue;
class IssueController extends Controller
{
    public function issue(){

        return view('issue.index');
    }
    public function add(){

        return view('issue.add');
    }

    public function save(Request $request){


        $attrbuites = $request->only(['title', 'description']);

        Issue::create([
            'title' => $attrbuites['title'],
            'description' => $attrbuites['description'],
        ]);

        return redirect()->back()->with('success', 'Your issue reported successfully!');

    }
}


