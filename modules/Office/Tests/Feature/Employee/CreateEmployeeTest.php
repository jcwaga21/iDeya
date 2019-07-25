<?php

namespace Modules\Office\Tests\Feature\Employee;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class CreateEmployeeTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     *
     */
    public function successfullyRecordedNewEmployee()
    {
        $payload = [];

        $this->post('/', $payload);

        $this->assertDatabaseHas('users', $payload);
    }

    // cannotSubmitDuplicateRecords
    // unableToCreateEmployeeRecordWhenEmailIsMissing
    //
}
