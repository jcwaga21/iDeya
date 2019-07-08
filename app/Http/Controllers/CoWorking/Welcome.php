<?php

namespace App\Http\Controllers\CoWorking;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\CoWorkingAttendance;

class Welcome extends Controller
{
    public function __invoke(Request $request, CoWorkingAttendance $user){
    
    return view("co-working.welcome",compact("user"));
    
    
    }
}
