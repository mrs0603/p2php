<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class fallback extends Controller
{
    public function fallback(){
        return view('fallback');
    }
}
