<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Movies extends Controller
{
    public function movies() {
        return view('movies');
    }
}
