<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class frontController extends Controller
{
    public function __construct(){

    }
    public function index(){
        $setups=DB::table('setups')->first();
        $cats = DB::table('categories')->where('status','on')->get();
        $homes=DB::table('homes')->get();
        $abouts=DB::table('abouts')->get();
        $services=DB::table('services')->get();
        return view ('frontend.index',[
            'setups'=>$setups,
            'cats'=>$cats,
            'homes'=>$homes,
            'abouts'=>$abouts,
            'services'=>$services,
        ]);
    }
}
