<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function indexAction(Request $request){
    $request->validate([
        'email' => 'required',
        'password' => 'required|max:12|min:8',
    ]);
    return $request->input();
    }
}
