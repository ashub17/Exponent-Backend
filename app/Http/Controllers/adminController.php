<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use session;
use DB;

class adminController extends Controller
{
    public function __construct(){

    }
    public function admin(){
        return view('backend.index');
    }
    public function setups(){
        $data=DB::table('setups')->first();
        return view('backend.insert.setups',['data'=>$data]);
    }

    public function categories(){
        $data=DB::table('categories')->get();
        return view('backend.insert.category',['data'=>$data]);
    }

    public function deleteCategory($id){
        $data=DB::table('categories')->where('id',$id)->delete();
        return redirect()->back();
    }
    public function editCategory($id){
        $data=DB::table('categories')->get();
        $maindata=DB::table('categories')->where('id',$id)->first();
        return view('backend.edit.category',['data'=>$data, 'maindata'=>$maindata]);
    }

    public function homes(){
        $data=DB::table('homes')->get();
        return view('backend.insert.homes',['data'=>$data]);
    }

    public function deleteHome($hid){
        $data=DB::table('homes')->where('hid',$hid)->delete();
        return redirect()->back();
    }

    public function editHome($hid){
        $data=DB::table('homes')->get();
        $maindata=DB::table('homes')->where('hid',$hid)->first();
        return view('backend.edit.home',['data'=>$data, 'maindata'=>$maindata]);
    }

}
