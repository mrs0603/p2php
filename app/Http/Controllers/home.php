<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class home extends Controller
{
    public function home(){
        return view('home');
    }

    public function redirect(){
        return redirect()->route('site.index');
    }
}
