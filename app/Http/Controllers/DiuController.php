<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DiuController extends Controller
{
    public function homePage()
    {
        return view('front.home.index');
    }
}
