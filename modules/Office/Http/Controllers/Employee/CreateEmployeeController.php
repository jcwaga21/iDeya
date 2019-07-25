<?php

namespace Modules\Office\Http\Controllers\Employee;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Office\Entities\Employee;

class CreateEmployeeController extends Controller
{
    public function __invoke(Request $request)
    {
        $data = $request->except('_token');

        Employee::create($data);
        return redirect()->route('employee.listing');
    }
}
