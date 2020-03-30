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
        $products=DB::table('products')->get();
        $clients=DB::table('clients')->where('category','client')->get();
        $partners=DB::table('clients')->where('category','partner')->get();
        return view ('frontend.index',[
            'setups'=>$setups,
            'cats'=>$cats,
            'homes'=>$homes,
            'abouts'=>$abouts,
            'services'=>$services,
            'products'=>$products,
            'clients'=>$clients,
            'partners'=>$partners,
        ]);
    }
}
