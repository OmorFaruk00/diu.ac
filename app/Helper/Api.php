<?php

namespace App\Helper;

use Illuminate\Support\Collection;
use Ixudra\Curl\Facades\Curl;

class Api
{
    public static function programs()
    {
        $basePath = env('API_URL');
        $url = "{$basePath}/public-diu-website/programs";
        $curl = Curl::to($url)->returnResponseObject();
        $curl->asJson(false);
        $response = $curl->get();

        if ($response->status == 200) {
            return $response->content->data;
        }
        return false;
    }

    public static function sliders()
    {
        $basePath = env('API_URL');
        $url = "{$basePath}/public-diu-website/sliders";
        $curl = Curl::to($url)->returnResponseObject();
        $curl->asJson(false);
        $response = $curl->get();

        if ($response->status == 200) {
            return $response->content;
        }
        return false;
    }

    public static function partners()
    {
        $basePath = env('API_URL');
        $url = "{$basePath}/public-diu-website/partners";
        $curl = Curl::to($url)->returnResponseObject();
        $curl->asJson(false);
        $response = $curl->get();

        if ($response->status == 200) {
            return $response->content;
        }
        return false;
    }

    public static function keyResourcePersons()
    {
        $basePath = env('API_URL');
        $url = "{$basePath}/public-diu-website/key-resource-persons";
        $curl = Curl::to($url)->returnResponseObject();
        $curl->asJson(false);
        $response = $curl->get();

        if ($response->status == 200) {
            return $response->content;
        }
        return false;
    }

    public static function diuGoverningBodies()
    {
        $basePath = env('API_URL');
        $url = "{$basePath}/public-diu-website/diu-governing-bodies";
        $curl = Curl::to($url)->returnResponseObject();
        $curl->asJson(false);
        $response = $curl->get();

        if ($response->status == 200) {
            return $response->content;
        }
        return false;
    }

    public static function departmentFacilities($slug)
    {
        $basePath = env('API_URL');
        $url = "{$basePath}/public-diu-website/department-facilities/{$slug}";
        $curl = Curl::to($url)->returnResponseObject();
        $curl->asJson(false);
        $response = $curl->get();

        if ($response->status == 200) {
            return $response->content;
        }
        return false;
    }

    public static function departmentGalleries($slug)
    {
        $basePath = env('API_URL');
        $url = "{$basePath}/public-diu-website/department-gallery/{$slug}";
        $curl = Curl::to($url)->returnResponseObject();
        $curl->asJson(false);
        $response = $curl->get();

        if ($response->status == 200) {
            return $response->content;
        }
        return false;
    }

}
