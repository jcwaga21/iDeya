<?php

namespace Modules\Office\Http\Controllers\Participant;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;

class SigninController extends Controller
{
    public function __invoke(Request $request)
    {
        return view('office::participant.signin');
    }
}
