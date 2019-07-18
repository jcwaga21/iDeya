<?php

namespace App\Http\Controllers\Guest;

use App\Http\Requests\GuestRegistrationRequest;
use App\Http\Controllers\Controller;
use App\GuestAttendance;
use App\User;
use Illuminate\Support\Facades\Hash;

class Attendance extends Controller
{
    public function __invoke(GuestRegistrationRequest $request)
    {
        $data = $request->except("_token");
        if (in_array($data['purpose'],['employee','co-working','internship'])){

            $data['username'] = $data['email'];
            $data['password'] = Hash::make('secret');
            unset($data['schoolorganization']);

            $user = User::create($data);


            return redirect()->route("account.password.change", compact('user'));
        }
        $user = GuestAttendance::create($request->except("_token"));
        return redirect()->route("guest.welcome", compact('user'));
    }
}
