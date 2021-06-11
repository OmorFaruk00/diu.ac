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
            return $response->content;
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

}
