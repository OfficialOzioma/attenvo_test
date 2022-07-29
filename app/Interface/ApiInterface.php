<?php

namespace App\Interface;

interface ApiInterface
{
    public function __construct(string $baseuri);

    public function link(string $path, $params);

    public function list_users($path, $params);

    public function user($path, $params);
}