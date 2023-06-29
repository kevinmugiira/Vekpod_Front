<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PlayerController extends Controller
{
    public function index()
    {
        return view('player');
    }

    public function browse()
    {
        return view('browse');
    }

    public function chart()
    {
        return view('chart');
    }

    public function artist()
    {
        return view('artist');
    }

    public function rtl()
    {
        return view('rtl');
    }

    public function artistDetail()
    {
        return view('artist-detail');
    }

    public function trackDetail()
    {
        return view('track-detail');
    }

    public function profile()
    {
        return view('user.profile');
    }

    public function test()
    {
        return view('test');
    }
}
