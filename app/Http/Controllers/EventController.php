<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Validation\Rule;
use App\Event;
use App\Mail\RegistrationEventMail;
use Illuminate\Support\Facades\Mail;

class EventController extends Controller
{
    public function seminar()
    {
        return view('form.seminar');
    }

    public function workshop()
    {
        return view('form.workshop');
    }

    public function store(Request $request)
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
            'phone_number'         => 'required|min:10|max:13',
            'address'       => 'required',     
            'type'          => 'required',        
        ]);

        if($request->type == 'Seminar')
            if($this->cekSeminar())
                return redirect()->back()->with('error', 'Registrasi Gagal, Mohon maaf kuota Seminar Nasional sudah terpenuhi.');

        if($request->type == 'Workshop'){
            $this->validate($request, [
                'workshop'  => 'required',
            ]);
            
            if($this->cekWorkshop($request->workshop))
                return redirect()->back()->with('error', 'Registrasi Gagal, Mohon maaf kuota workshop yang dipilih sudah terpenuhi.');
        }

        $data = [
            'type'          => $request->type,
            'name'          => $request->name,
            'gender'        => $request->gender,
            'instance'      => $request->instance,
            'email'         => $request->email,
            'phone_number'         => $request->phone_number,
            'address'       => $request->address,
            'workshop'      => $request->type == 'Workshop' ? $request->workshop:null,
        ];

        $event = Event::create($data);

        if($event){
            Mail::to($event->email)->send(new RegistrationEventMail($event));
            return redirect()->back()->with('success', 'Registrasi Berhasil. Silahkan cek email untuk informasi selanjutnya, jika tidak ditemukan maka cek email spam!');
        } else {
            return redirect()->back()->with('error', 'Registrasi Gagal, silahkan coba lagi dan pastikan data dicek terlebih dahulu.');
        }
    }

    public function cekSeminar()
    {
        $participants = Event::seminar()->count(); 
        return $participants >= 200 ? true:false;
    }

    public function cekWorkshop($workshop)
    {
        $participants = Event::certainWorkshop($workshop)->count(); 
        return $participants >= 30 ? true:false;
    }
}
