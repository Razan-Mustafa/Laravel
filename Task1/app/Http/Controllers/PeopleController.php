<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\People;
use App\Models\Post;


class PeopleController extends Controller
{
    public function index3(Request $request)
    {
        $pe = People::find(1)->name;
        return view('Omany');

       // dd($cont);
    }
}
