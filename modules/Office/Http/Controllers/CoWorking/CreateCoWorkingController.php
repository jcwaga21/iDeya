<?php

namespace Modules\Office\Http\Controllers\CoWorking;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Hash;
use Modules\Office\Entities\CoWorking;

class CreateCoWorkingController extends Controller
{
    public function __invoke(Request $request)
    {
        $data = $request->except('_token');
        CoWorking::create($data);


        $user['email'] = $data['email'];
        $user['password'] = Hash::make($data['email']);
        $user['remember_token'] = $request->post('_token');
        $user['type'] = 'co-worker';
        User::create($user);
        return redirect()->route('users.listing');
    }
}
