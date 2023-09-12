<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\People;
use App\Models\Post;


class PeopleController extends Controller
{
    public function index3(Request $request)
    {
        $pe = People::all();
        // return view('Omany',['pe' => $pe]);
        return view('Omany', compact('pe'));

        //dd($pe );
    }
}
