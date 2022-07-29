<?php

namespace App\Http\Controllers;

use App\Interface\ApiInterface;

use Illuminate\Support\Facades\Cache;
use Inertia\Inertia;

class ReqresController extends Controller
{
    /**
     * Make sure that the controller is only accessible when logged in.
     *
     * @return string|null
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }
    /**
     * Display a listing of all the users.
     *
     * @return \Illuminate\Http\Response
     */
    public function list_users(ApiInterface $apiInterface, $page_id)
    {

        $page = ['page' => $page_id];

        # Store Data cache
        $results = Cache::remember('users', 20, function () use ($apiInterface, $page) {
            return $apiInterface->list_users('users', $page);
        });


        return Inertia::render('Index', ['results' => $results]);
    }

    /**
     * Display the specified user.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function show(ApiInterface $apiInterface, $id)
    {
        $result = $apiInterface->user('users', $id);

        $key = 'user_' . $id;

        # Store Data cache
        $result = Cache::remember($key, 20, function () use ($apiInterface, $id) {
            return $apiInterface->user('users', $id);
        });

        return Inertia::render('Show', ['result' => $result]);
    }
}