<?php

namespace App\Http\Controllers;

use App\Helper\Api;
use Illuminate\Http\Request;
use Ixudra\Curl\Facades\Curl;
use Illuminate\Support\Facades\Cache;

class DiuController extends Controller
{
    public function homePage()
    {
        if (!Cache::has('sliderData')) {
            $sliders = Api::sliders();
            Cache::put('sliderData', $sliders);
        }

        if (!Cache::has('partnersData')) {
            $partners = Api::partners();
            Cache::put('partnersData', $partners);
        }

        if (!Cache::has('programsData')) {
            $programs = Api::programs();
            Cache::put('programsData', $programs);
        }

        $cache_sliders = Cache::get('sliderData');
        $cache_partners = Cache::get('partnersData');
        $cache_programs = Cache::get('programsData');

        /*$cache_sliders = Api::sliders();
        $cache_partners = Api::partners();
        $cache_programs = Api::programs();*/

        return view('front.home.index', [
            'programs' => $cache_programs,
            'sliders' => $cache_sliders,
            'partners' => $cache_partners
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
        $facultyMembers = Api::departmentFacultyMembers($slug);

        return view('front.departmentDetails.index', compact('slug', 'facultyMembers'));
    }

    public function test()
    {
        return view('front.test.index');
    }

    public function noticeBoardDetails($slug)
    {
        return view('front.noticeBoard.show', compact('slug'));
    }
}
