<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class razan extends Controller
{
    public function index()
    {
        $data = [
            'name' => 'John',
            'age' => 30
        ];

        return view('contact', $data);
    }
}
