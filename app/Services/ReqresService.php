<?php

namespace App\Services;

use App\Interface\ApiInterface;
use Illuminate\Support\Facades\Http;

class ReqresService implements ApiInterface
{
    public  $baseURL;
    public  $path;

    public function __construct(string $baseurl)
    {
        $this->baseURL = $baseurl;
    }

    public function link(string $path, $params)
    {
        $this->path = $path;

        if (!empty($params) && is_array($params)) {

            $query = http_build_query($params);

            return $this->baseURL . $this->path . '?' . $query;
        }

        return $this->baseURL . $this->path . '/' . $params;
    }

    public function list_users($path, $params = [])
    {

        $url = $this->link($path, $params);

        $response = Http::get($url);

        return $response->json();
    }

    public function user($path, $params)
    {

        $url = $this->link($path, $params);

        $response = Http::get($url);

        return $response->json();
    }
}