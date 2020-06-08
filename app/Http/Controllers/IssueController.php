<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IssueController extends Controller
{
    public function issue(){

        return view('issue.index');
    }
    public function add(){

        return view('issue.add');
    }

    public function save(Request $request){

        return $request;
    }
}


