<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Pagecontroller extends Controller
{
    public function index(){
        return view('home');
    }

    public function newPage(){
        return view('newPage');
    }
}
