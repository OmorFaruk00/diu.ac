<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DiuController extends Controller
{
    public function homePage()
    {
        return view('front.home.index');
    }

    public function aboutUs()
    {
        return view('front.about.index');
    }

    public function noticeBoard()
    {
        return view('front.noticeBoard.index');
    }

    public function institute()
    {
        return view('front.institute.index');
    }

    public function alumni()
    {
        return view('front.alumni.index');
    }

    public function cell()
    {
        return view('front.cell.index');
    }

    public function contactUs()
    {
        return view('front.contactUs.index');
    }
}
