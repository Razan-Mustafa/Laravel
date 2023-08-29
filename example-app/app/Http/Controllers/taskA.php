<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\support\facades\DB;
// use App\Models\task1;

class taskA extends Controller
{
    // public function get_users(){
       
    //     $data= task1::all();
    //     return view('login',compact('data'));
    //     print_r(anjbdkjsad);
    // }

    // public function get_users1(){
       
    //     $data= task1::all();
    //     return view('login',compact('data'));
    //     print_r(anjbdkjsad);
        
    // }

    public function data(Request $request)
    {
        
        // $email = $request->input('email');
        // $password = $request->input('password');
        $userss = DB::select('select * from users');

        foreach ($userss as $user){
        if ($user->password == $request->input('password')  && $user->email == $request->input('email')) {
            
             return redirect('home')->with('success', 'Logged in successfully.');

        }
        }
       
        return  redirect('login')->with('error', 'Logged in fail.'); 

    
    }

}


