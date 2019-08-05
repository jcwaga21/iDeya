<?php

namespace Modules\Office\Http\Controllers\Employee;

use App\User;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Hash;
use Modules\Office\Entities\Employee;
use Modules\Office\Http\Requests\AddEmployeeRequest;

class CreateEmployeeController extends Controller
{
    public function __invoke(AddEmployeeRequest $request)
    {
        $data = $request->except('_token');
        Employee::create($data);


        $user['email'] = $data['email'];
        $user['password'] = Hash::make($data['email']);
        $user['remember_token'] = $request->post('_token');
        $user['type'] = 'employee';
        User::create($user);
        return redirect()->route('users.listing');
    }
}
