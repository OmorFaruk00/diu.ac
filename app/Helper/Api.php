<?php

namespace App\Helper;

use Illuminate\Support\Collection;
use Ixudra\Curl\Facades\Curl;

class Api
{
    public static function ssl()
    {
        return stream_context_create(
            [
                'ssl' => [
                    'verify_peer' => false,
                    'verify_peer_name' => false,
                ],
            ]);
    }
    public static function programs()
    {

        $response = json_decode(@file_get_contents('https://api.diu.ac/public-diu-website/programs', false, self::ssl()));
        return $response->data;

        // $basePath = env('API_URL');
        // $url = "{$basePath}/public-diu-website/programs";
        // $curl = Curl::to($url)->returnResponseObject();
        // $curl->asJson(false);
        // $response = $curl->get();

        // if ($response->status == 200) {
        //     return $response->content->data;
        // }
        // return false;
   
       
    }

    public static function sliders()
    {
        $response = json_decode(@file_get_contents('https://api.diu.ac/public-diu-website/sliders', false, self::ssl()));
        return $response;

        // $basePath = env('API_URL');
        // $url = "{$basePath}/public-diu-website/sliders";
        // $curl = Curl::to($url)->returnResponseObject();
        // $curl->asJson(false);
        // $response = $curl->get();

        // if ($response->status == 200) {
        //     return $response->content;
        // }
        // return false;
    }

    public static function partners()
    {

        $response = json_decode(@file_get_contents('https://api.diu.ac/public-diu-website/partners', false, self::ssl()));
        return $response;

        // $basePath = env('API_URL');
        // $url = "{$basePath}/public-diu-website/partners";
        // $curl = Curl::to($url)->returnResponseObject();
        // $curl->asJson(false);
        // $response = $curl->get();

        // if ($response->status == 200) {
        //     return $response->content;
        // }
        // return false;
    }

    public static function keyResourcePersons()
    {

        $response = json_decode(@file_get_contents('https://api.diu.ac/public-diu-website/key-resource-persons', false, self::ssl()));
        return $response;

        // $basePath = env('API_URL');
        // $url = "{$basePath}/public-diu-website/key-resource-persons";
        // $curl = Curl::to($url)->returnResponseObject();
        // $curl->asJson(false);
        // $response = $curl->get();

        // if ($response->status == 200) {
        //     return $response->content;
        // }
        // return false;
    }

    public static function diuGoverningBodies()
    {

        $response = json_decode(@file_get_contents('https://api.diu.ac/public-diu-website/diu-governing-bodies', false, self::ssl()));
        return $response;

        // $basePath = env('API_URL');
        // $url = "{$basePath}/public-diu-website/diu-governing-bodies";
        // $curl = Curl::to($url)->returnResponseObject();
        // $curl->asJson(false);
        // $response = $curl->get();

        // if ($response->status == 200) {
        //     return $response->content;
        // }
        // return false;
    }

    public static function departmentFacilities($slug)
    {
        $response = json_decode(@file_get_contents('https://api.diu.ac/public-diu-website/department-facilities/'.$slug, false, self::ssl())); 
        return   $response->data; 

        // $response = json_decode(@file_get_contents('https://api.diu.ac/public-diu-website/department-facilities/{$slug}', false, self::ssl()));
        // return $response;
        // $basePath = env('API_URL');
        // $url = "{$basePath}/public-diu-website/department-facilities/{$slug}";
        // $curl = Curl::to($url)->returnResponseObject();
        // $curl->asJson(false);
        // $response = $curl->get();

        // if ($response->status == 200) {
        //     return $response->content;
        // }
        // return false;
    }

    public static function departmentGalleries($slug)
    {
        $response = json_decode(@file_get_contents('https://api.diu.ac/public-diu-website/department-gallery/'.$slug, false, self::ssl())); 
        return   $response->data; 


        // $basePath = env('API_URL');
        // $url = "{$basePath}/public-diu-website/department-gallery/{$slug}";
        // $curl = Curl::to($url)->returnResponseObject();
        // $curl->asJson(false);
        // $response = $curl->get();

        // if ($response->status == 200) {
        //     return $response->content;
        // }
        // return false;
    }

    public static function departmentFacultyMembers($slug)
    {

        $facultyMembers = json_decode(@file_get_contents('https://api.diu.ac/public-diu-website/department-faculty-member/'.$slug, false, self::ssl())); 
        return   $facultyMembers->data;        
        
        // $basePath = env('API_URL');
        // $url = "{$basePath}/public-diu-website/department-faculty-member/{$slug}";
        // $curl = Curl::to($url)->returnResponseObject();
        // $curl->asJson(false);
        // $response = $curl->get();

        // if ($response->status == 200) {
        //     return $response->content->data;
        // }
        // return false;
    }

    public static function getJournal()
    {

        $response = json_decode(@file_get_contents('https://api.diu.ac/public-diu-website/journal', false, self::ssl()));
        return $response;
    }
    public static function getJournalDetails($id)
    {
        $response = json_decode(@file_get_contents('https://api.diu.ac/public-diu-website/journal/'.$id, false, self::ssl())); 
        return   $response;  
    }

}
