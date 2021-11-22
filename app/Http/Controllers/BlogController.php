<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    //
    public function show(){
        echo "Pakistan";
    }

    public function show1($id){
        echo $id;
    }

    public function show2(){
        return view('Admin.myprofile');
    }

     public function show3($name){
        return view('Admin.myprofile',['name' => $name]);
    }

    public function myfunc(Request $request){
       echo "<pre>";
       print_r($request);
       echo"</pre>";
       

    }

    public function contact(){
        $name = 'Arslan';
        $namesec = 'zaid';
        return view("test", ['name'=>$name],['namesec'=>$namesec]);
    }



}



