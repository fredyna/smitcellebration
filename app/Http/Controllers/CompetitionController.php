<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Competition;
use App\Mail\RegistrationCompetitionMail;
use Illuminate\Support\Facades\Mail;

class CompetitionController extends Controller
{
    public function index()
    {
        return view('form.competition');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'team_name'          => 'required',
            'leader_name'        => 'required',
            'leader_gender' => [
                'required',
                Rule::in(['Laki-Laki', 'Perempuan']),
            ],
            'email'              => 'required|email|unique:competitions',
            'phone_number'       => 'required|min:10|max:13',
        ]);

        if($request->member_2 != '')
            $this->validate($request, ['member_1' => 'required']);

        if($request->member_3 != '')
            $this->validate($request, [
                'member_1' => 'required',
                'member_2' => 'required'
            ]);

        if($request->member_4 != '')
            $this->validate($request, [
                'member_1' => 'required',
                'member_2' => 'required',
                'member_3' => 'required',
            ]);

        if($request->member_5 != '')
            $this->validate($request, [
                'member_1' => 'required',
                'member_2' => 'required',
                'member_3' => 'required',
                'member_4' => 'required',
            ]);

        if($this->cekCompetition())
            return redirect()->back()->with('error', 'Registrasi Gagal, Mohon maaf kuota Kompetisi sudah terpenuhi.');

        $data = [
            'team_name'     => $request->team_name,
            'leader_name'   => $request->leader_name,
            'leader_gender' => $request->leader_gender,
            'instance'      => !empty($request->instance) ? $request->instance:'tidak ada',
            'email'         => $request->email,
            'phone_number'  => $request->phone_number,
            'member_1'      => $request->member_1 != '' ? $request->member_1:null,
            'member_2'      => $request->member_2 != '' ? $request->member_2:null,
            'member_3'      => $request->member_3 != '' ? $request->member_3:null,
            'member_4'      => $request->member_4 != '' ? $request->member_4:null,
            'member_5'      => $request->member_5 != '' ? $request->member_5:null,
        ];

        $competition = Competition::create($data);

        if($competition){
            Mail::to($competition->email)->send(new RegistrationCompetitionMail($competition));
            return redirect()->back()->with('success', 'Registrasi Berhasil. Silahkan cek email untuk informasi selanjutnya, jika tidak ditemukan maka cek email spam!');
        } else {
            return redirect()->back()->with('error', 'Registrasi Gagal, silahkan coba lagi dan pastikan data dicek terlebih dahulu.');
        }
    }

    public function cekCompetition()
    {
        $team = Competition::team()->count();
        return $team >= 40 ? true:false;
    }
}
