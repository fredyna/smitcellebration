<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Event;
use App\Competition;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $data['seminar']            = Event::seminar()->count();
        $data['prosen_seminar']     = ($data['seminar'] / 200 ) * 100;
        $data['workshop1']          = Event::certainWorkshop('Mastering Flutter')->count();
        $data['prosen_workshop1']   = ($data['workshop1'] / 30 ) * 100;
        $data['workshop2']          = Event::certainWorkshop('Cyber Security')->count();
        $data['prosen_workshop2']   = ($data['workshop2'] / 30 ) * 100;
        $data['competition']        = Competition::team()->count();
        $data['prosen_competition'] = ($data['competition'] / 40 ) * 100;
        $data['new_participants']   = Event::newParticipants()->limit(5)->get(); 
        $data['new_members']         = Competition::newTeam()->limit(5)->get(); 
        return view('admin.index')->with($data);
    }
}

