<?php

namespace Tests\Helpers;

use App\User;
use Modules\Office\Entities\Employee;

trait UserFactoryHelper
{
    public function mockAdminUser(string $email = "admin@example.com")
    {
        $employee = factory(Employee::class)->create(['email' => $email]);
        return factory(User::class)->create(['email' => $employee->email]);
    }
}
