<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Capital;
use App\Models\Country;

class CountryController extends Controller
{
    public function index2(Request $request)
    {
        $cont = Capital::find(1)->name;
        //return view('one', 'cont'=>$cont);

       // dd($cont);
    }
}
