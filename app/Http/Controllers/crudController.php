<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use DB;
use Session;

class crudController extends Controller
{
    public function insertData(){
        $data = Input::except('_token','submit');
        print_r($data);
        $table=decrypt($data['table']);
        unset($data['table']);
        if(!empty($data['image'])){
            if(Input::hasFile('image')){
              $data['image'] = $this->upload($data['image'],$table);
            }
        }
    	$data['created_at'] = date('Y-m-d H:i:s');
    	DB::table($table)->insert($data);
    	session::flash('message','Data inserted successfully!!!');
        return redirect()->back()->with('message','New data successfully inserted');
    }
    private function upload($image,$table){
        $name = $image->getClientOriginalName();
        $newName = date('ymdgis').$name;
        $image->move(public_path().'/'.$table,$newName);
        return $newName;
    } 
}
