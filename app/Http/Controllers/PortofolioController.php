<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortofolioController extends Controller
{
    public function getPortofolio(){

        return view('portofolio.index');
    }
}