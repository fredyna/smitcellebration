<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('front.index');
    }

    public function seminar()
    {
        return view('front.seminar');
    }

    public function workshop()
    {
        return view('front.workshop');
    }

    public function competition()
    {
        return view('front.competition');
    }
}
