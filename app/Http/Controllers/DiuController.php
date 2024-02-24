<?php

namespace App\Http\Controllers;

use App\Helper\Api;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class DiuController extends Controller
{
    public function homePage()
    {
        // return $partners = Api::partners();;
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

        return view('front.home.index', [
            'programs' => $cache_programs,
            'sliders' => $cache_sliders,
            'partners' => $cache_partners
        ]);
    }

    public function aboutUs()
    {

        if (!Cache::has('keyResourcePersons')) {
            $keyResourcePersons = Api::keyResourcePersons();
            Cache::put('keyResourcePersons', $keyResourcePersons);
        }

        if (!Cache::has('diuGoverningBodies')) {
            $diuGoverningBodies = Api::diuGoverningBodies();
            Cache::put('diuGoverningBodies', $diuGoverningBodies);
        }


        $cache_key_resource_persons = Cache::get('keyResourcePersons');
        $cache_diu_governing_bodies = Cache::get('diuGoverningBodies');

        return view('front.about.index', [
            'keyResourcePersons' => $cache_key_resource_persons,
            'diuGoverningtypes' => $cache_diu_governing_bodies->vitalPersonType,
            'diuGoverningPersons' => $cache_diu_governing_bodies->vitalPerson
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
        return view('front.certificateVerification.newindex');
    }
    public function certificateVerificationTest()
    {
        return view('front.certificateVerification.test');
    }

    public function departmentDetails($slug)
    {

        if (!Cache::has('programsData_' . $slug)) {

            $facultyMembers = Api::departmentFacultyMembers($slug);

            Cache::put('programsData_' . $slug, $facultyMembers);
        }



        $facultyMembers = Cache::get('programsData_' . $slug);

        

        if($slug == 'department-of-sociology')
        {
            $facultyMembers[6] = [

                "id" => 138,
                "name" => "Md. Fazlul Haque",
                "email" => "fazlul.soc@diu.ac",
                "designation" => "Associate Professor",
                "department" => "Department of Sociology",
                "office_email" => "fazlul.soc@diu.ac",
                "personal_phone_no" => "8801718184811",
                "jobtype" => "Full Time",
                "campus" => "Permanent Campus",
                "profile_photo_file" => "images/profile_image_upload_138.jpg",
                "profilepic" => "https://api.diu.ac/images/profile_image_upload_138.jpg",
                "groups" => "faculty",
                "website" => "https://profile.diu.ac/md.fazlul.haque"

            ];

        }


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

    public function eventBoardDetails($slug)
    {
        return view('front.eventBoard.show', compact('slug'));
    }

    public function booksAndLibrary()
    {
        return view('front.booksAndLibrary.index');
    }

    public function trendingCourses()
    {
        return view('front.trendingCourses.index');
    }

    public function certifiedTeachers()
    {
        return view('front.certifiedTeachers.index');
    }

    public function certification()
    {
        return view('front.certification.index');
    }

    public function privacyPolicy()
    {
        return view('front.privacyPolicy.index');
    }
}
