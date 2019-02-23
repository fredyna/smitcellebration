<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Event;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Mail;
use App\Mail\RegistrationAcceptMail;

class ParticipantsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $participants = Event::newParticipants()->get();
        return view('admin.participant.new')->with('participants', $participants);
    }

    public function seminar()
    {
        $participants = Event::seminar()->get();
        return view('admin.participant.seminar')->with('participants', $participants);
    }

    public function workshop($workshop=null)
    {
        if($workshop==null)
            $participants = Event::workshop()->get();
        else
            $participants = Event::workshop()->where('workshop', $workshop)->get();
            
        return view('admin.participant.workshop')->with('participants', $participants);
    }

    public function show($id)
    {
        $participant = Event::findOrFail($id);
        return view('admin.participant.show')->with('participant', $participant);
    }

    public function edit($id)
    {
        $participant = Event::findOrFail($id);
        return view('admin.participant.form')->with('participant', $participant);
    }

    public function accept($id)
    {
        $participant = Event::find($id);
        $participant->payment = true;
        if($participant->save()){
            Mail::to($participant->email)->send(new RegistrationAcceptMail($participant));
            return redirect()->route('admin.participants.new')->with('success', 'Success! Data just moved to correct table.');
        } else{
            return redirect()->back()->with('error', 'Failed! Data failed to moved.');
        }
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name'          => 'required',
            'gender' => [
                'required',
                Rule::in(['Laki-Laki', 'Perempuan']),
            ],
            'instance'      => 'required',
            'email' => [
                'required',
                'email',
                Rule::unique('events')->where(function ($query) use ($request){
                    return $query->where('type', $request->type);
                }),
            ],
            'phone_number'  => 'required',
            'address'       => 'required',         
        ]);

        $participant = Event::find($id);

        $participant->name = $request->name;
        $participant->gender = $request->gender;
        $participant->instance = $request->instance;
        $participant->email = $request->email;
        $participant->phone_number = $request->phone_number;
        $participant->address = $request->address;

        if($participant->type == 'Workshop'){
            $this->validate($request, [
                'workshop'  => 'required',
            ]);

            if($participant->workshop != $request->workshop){
                if($this->cekWorkshop($request->workshop))
                    return redirect()->back()->with('error', 'Failed!, The selected workshop quota is full.');
            }

            $participant->workshop = $request->workshop;
        }

        if($participant->save()){
            return redirect()->back()->with('success', 'Success!, Update data success.');
        } else {
            return redirect()->back()->with('error', 'Failed!, Update data failed.');
        }
    }

    public function destroy($id)
    {
        $participant = Event::find($id);
        if($participant->delete()){
            return redirect()->back()->with('success', 'Delete Data Success.');
        } else{
            return redirect()->back()->with('error', 'Delete Data Failed');
        }
    }

    public function cekWorkshop($workshop)
    {
        $participants = Event::certainWorkshop($workshop)->count(); 
        return $participants >= 30 ? true:false;
    }

    public function attend($id)
    {
        $participant = Event::find($id);
        $participant->attend = true;
        if($participant->save()){
            return redirect()->back()->with('success', 'Success! Update Attendance Success.');
        } else{
            return redirect()->back()->with('error', 'Failed! Update Attendance Failed.');
        }
    }
}
