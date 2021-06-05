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

    public function admission()
    {
        return view('front.admission.index');
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

    public function club()
    {
        return view('front.club.index');
    }

    public function publications()
    {
        return view('front.publications.index');
    }

    public function convocation()
    {
        return view('front.convocation.index');
    }

    public function certificateVerification()
    {
        return view('front.certificateVerification.index');
    }
}
