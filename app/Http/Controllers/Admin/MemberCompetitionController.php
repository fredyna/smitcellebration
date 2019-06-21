<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Validation\Rule;
use App\Competition;
use App\Mail\RegistrationCompetitionAcceptMail;
use Illuminate\Support\Facades\Mail;

class MemberCompetitionController extends Controller
{
    public function index()
    {
        $members = Competition::newTeam()->get();
        return view('admin.competition.new')->with('members', $members);
    }

    public function member()
    {
        $members = Competition::team()->get();
        return view('admin.competition.member')->with('members', $members);
    }

    public function show($id)
    {
        $member = Competition::findOrFail($id);
        return view('admin.competition.show')->with('member', $member);
    }

    public function accept($id)
    {
        $member = Competition::find($id);
        $member->payment = true;
        if($member->save()){
            Mail::to($member->email)->send(new RegistrationCompetitionAcceptMail($member));
            return redirect()->route('admin.competition.new')->with('success', 'Success! Data just moved to correct table.');
        } else{
            return redirect()->back()->with('error', 'Failed! Data failed to moved.');
        }
    }

    public function edit($id)
    {
        $member = Competition::findOrFail($id);
        return view('admin.competition.form')->with('member', $member);
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'team_name'          => 'required',
            'leader_name'        => 'required',
            'leader_gender' => [
                'required',
                Rule::in(['Laki-Laki', 'Perempuan']),
            ],
            'email'              => 'required|email',
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

        $member = Competition::find($id);
        $member->team_name     = $request->team_name;
        $member->leader_name   = $request->leader_name;
        $member->leader_gender = $request->leader_gender;
        $member->email         = $request->email;
        $member->phone_number  = $request->phone_number;
        $member->instance      = $request->instance;
        $member->member_1      = $request->member_1;
        $member->member_2      = $request->member_2;
        $member->member_3      = $request->member_3;
        $member->member_4      = $request->member_4;
        $member->member_5      = $request->member_5;

        if($member->save()){
            return redirect()->back()->with('success', 'Success!, Update data success.');
        } else {
            return redirect()->back()->with('error', 'Failed!, Update data failed.');
        }
    }

    public function destroy($id)
    {
        $member = Competition::find($id);
        if($member->delete()){
            return redirect()->back()->with('success', 'Delete Data Success.');
        } else{
            return redirect()->back()->with('error', 'Delete Data Failed');
        }
    }

    public function attend($id)
    {
        $member = Competition::find($id);
        $member->attend = true;
        if($member->save()){
            return redirect()->back()->with('success', 'Success! Update Attendance Success.');
        } else{
            return redirect()->back()->with('error', 'Failed! Update Attendance Failed.');
        }
    }
}
