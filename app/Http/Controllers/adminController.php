<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use session;
use DB;

class adminController extends Controller
{
    public function __construct(){

        $this->middleware('auth');
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

    public function abouts(){
        $data=DB::table('abouts')->get();
        return view('backend.insert.abouts',['data'=>$data]);
    }

    public function deleteAbout($aid){
        $data=DB::table('abouts')->where('aid',$aid)->delete();
        return redirect()->back();
    }

    public function editAbout($aid){
        $data=DB::table('abouts')->get();
        $maindata=DB::table('abouts')->where('aid',$aid)->first();
        return view('backend.edit.about',['data'=>$data, 'maindata'=>$maindata]);
    }

    public function services(){
        $data=DB::table('services')->get();
        return view('backend.insert.services',['data'=>$data]);
    }

    public function deleteService($sid){
        $data=DB::table('services')->where('sid',$sid)->delete();
        return redirect()->back();
    }

    public function editService($sid){
        $data=DB::table('services')->get();
        $maindata=DB::table('services')->where('sid',$sid)->first();
        return view('backend.edit.service',['data'=>$data, 'maindata'=>$maindata]);
    }

    public function products(){
        $data=DB::table('products')->get();
        return view('backend.insert.products',['data'=>$data]);
    }

    public function deleteProduct($pid){
        $data=DB::table('products')->where('pid',$pid)->delete();
        return redirect()->back();
    }

    public function editProduct($pid){
        $data=DB::table('products')->get();
        $maindata=DB::table('products')->where('pid',$pid)->first();
        return view('backend.edit.product',['data'=>$data, 'maindata'=>$maindata]);
    }

    public function clients(){
        $data=DB::table('clients')->get();
        return view('backend.insert.clients',['data'=>$data]);
    }

    public function deleteClient($cpid){
        $data=DB::table('clients')->where('cpid',$cpid)->delete();
        return redirect()->back();
    }

}
