<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Train;

class Pagecontroller extends Controller
{
    public function index(){
        return view('home');
    }

    public function newPage(){
        return view('newPage');
    }

    public function trains(){
        $trains = Train::all();
        return view('trains', compact('trains'));
    }
}

