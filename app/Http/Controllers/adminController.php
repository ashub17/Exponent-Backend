<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class adminController extends Controller
{
    public function __construct(){

    }
    public function admin(){
        return view('backend.index');
    }
    public function setups(){
        return view('backend.insert.setups');
    }
}
