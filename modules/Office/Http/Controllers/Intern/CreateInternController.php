<?php

namespace Modules\Office\Http\Controllers\Intern;

use App\User;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Hash;
use Modules\Office\Entities\Intern;
use Modules\Office\Http\Requests\AddInternRequest;

class CreateInternController extends Controller
{
    public function __invoke(AddInternRequest $request)
    {
        $data = $request->except('_token');
        Intern::create($data);


        $user['email'] = $data['email'];
        $user['password'] = Hash::make($data['email']);
        $user['remember_token'] = $request->post('_token');
        $user['type'] = 'internship';
        User::create($user);
        return redirect()->route('users.listing');
    }
}
