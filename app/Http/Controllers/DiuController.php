<?php

namespace App\Http\Controllers;

use App\Helper\Api;
use Illuminate\Http\Request;
use Ixudra\Curl\Facades\Curl;

class DiuController extends Controller
{
    public function homePage()
    {

        $sliders = Api::sliders();
        $partners = Api::partners();
        $programs = Api::programs();

        return view('front.home.index', [
            'programs' => $programs,
            'sliders' => $sliders,
            'partners' => $partners
        ]);
    }

    public function aboutUs()
    {
        $keyResourcePersons = Api::keyResourcePersons();
        $diuGoverningBodies = Api::diuGoverningBodies();

        return view('front.about.index', [
            'keyResourcePersons' => $keyResourcePersons,
            'diuGoverningtypes' => $diuGoverningBodies->vitalPersonType,
            'diuGoverningPersons' => $diuGoverningBodies->vitalPerson
        ]);
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

    public function departmentDetails($slug)
    {
        $facilities = Api::departmentFacilities($slug);
        $facultyMembers = Api::departmentFacultyMembers($slug);

        return view('front.departmentDetails.index', compact('slug', 'facilities','facultyMembers'));
    }

    public function test()
    {

        return view('front.test.index');

    }
}
