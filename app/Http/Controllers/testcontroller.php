<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\support\Facades\DB;
use App\User;

class testcontroller extends Controller
{
   public function first(Request $request)
   {

          $request->session()->flash('data','data has been submitted');
         return redirect('/');
          $request->validate([
              "name"=>"required",
              "password"=>"min:5 | max:7",
          ]);
          echo "<pre>";
          print_r($request->input());
          echo "</pre>";
   }

   public function dbcheck()
   {
          //$user=DB::select('select * from student');
          //$user=DB::table('student')->count();
          //$user=DB::table('student')->find(2);
          //$user=DB::table('student')->get();
          //  $user=DB::table('student')
         // ->insert([
                // "name"=>"kaka",
                //  "age"=>"12",
                //  "class"=>"6"
         // ]);
        // $user=DB::table('student')
        // ->where('id','3')
        //  ->update([
         //    "class"=>"six"
        // ]);


          $user=DB::table('student')
          ->join('gender','student.id','gender.g_id')
          ->get();
          echo"<pre>";
          print_r($user);
          echo"</pre>";
   }

   public function show(){
       $users = DB::select('select * from student');
      return view('data', compact('users'));
   }


   public function mode(){
    return student::all();
   }


   public function sample(){
     $data =DB::table('student')->paginate(3);
      return view('Admin.pagination',['data'=>$data]);
   }



}
