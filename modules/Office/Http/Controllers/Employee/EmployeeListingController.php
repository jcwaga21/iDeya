<?php

namespace Modules\Office\Http\Controllers\Employee;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Office\Entities\Employee;

class EmployeeListingController extends Controller
{
    public function __invoke(Request $request)
    {
        $employees = Employee::all();

        return view('office::employee.listing', compact('employees'));
    }
}
