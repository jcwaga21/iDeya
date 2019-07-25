<?php

namespace Tests\Browser\Office\Employee;

use App\User;
use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class CreateNewEmployeeRecordTest extends DuskTestCase
{
    use DatabaseMigrations;


    /**
     * 403 error if two testing executed
     *
     * @return void
     * @group employee
     * @group cannotSubmitDuplicateRecords
     *
     */
    public function cannotSubmitDuplicateRecords()
    {
        $this->markTestIncomplete('403 error if two testing executed');
        factory(User::class)->create(['email' => 'cj@gmail.com']);
        $this->browse(function (Browser $browser) {

            $response = $browser->visit(route('office.login'))
                ->type('email', 'cj@gmail.com')
                ->type('password', 'password')
                ->click('#login')
                ->assertSee('Employee');

            $response->clickLink('Employee')
                ->click('#create-employee')
                ->type('first_name', 'Jade')
                ->type('last_name', 'Doe')
                ->type('contact_number', '09123456789')
                ->type('position', 'employee')
                ->type('email', 'jade@gmail.com')
                ->click('#add_employee')
                ->assertSee('Employee Listing')
                ->assertSee('Jade Doe');

            $this->assertDatabaseHas(
                'employees',
                [
                    'first_name' => 'Jade',
                    'last_name' => 'Doe',
                    'contact_number' => '09123456789',
                    'position' => 'employee',
                    'email' => 'jade@gmail.com',
                ]
            );

            $response->clickLink('Employee')
                ->type('first_name', 'Jade')
                ->type('last_name', 'Doe')
                ->type('contact_number', '09123456789')
                ->type('position', 'employee')
                ->type('email', 'jade@gmail.com')
                ->click('#add_employee')
                ->assertSee('Employee Listing')
                ->assertSee('Jade Doe');


            $employee = User::where([
                'first_name' => 'Jade',
                'last_name' => 'Doe',
                'contact_number' => '09123456789',
                'position' => 'employee',
                'email' => 'jade@gmail.com',
            ])->get();

            $this->assertEquals(1, $employee->count());
        });
    }

    /**
     * A Dusk test example.
     *
     * @return void
     * @test
     * @group employee
     * @group successfullyRecordedNewEmployee
     *
     */
    public function successfullyRecordedNewEmployee()
    {
        factory(User::class)->create(['email' => 'jc@gmail.com']);
        $this->browse(function (Browser $browser) {
            $response = $browser->visit(route('office.login'))
                    ->type('email', 'jc@gmail.com')
                    ->type('password', 'password')
                    ->click('#login')
                    ->assertSee('Employee');

            $response->clickLink('Employee')
                ->click('#create-employee')
                ->type('first_name', 'Jade')
                ->type('last_name', 'Doe')
                ->type('contact_number', '09123456789')
                ->type('position', 'employee')
                ->type('email', 'jade@gmail.com')
                ->click('#add_employee')
                ->assertSee('Employee Listing')
                ->assertSee('Jade Doe');

            $this->assertDatabaseHas(
                'employees',
                [
                   'first_name' => 'Jade',
                    'last_name' => 'Doe',
                    'contact_number' => '09123456789',
                    'position' => 'employee',
                    'email' => 'jade@gmail.com',
                ]
            );
        });
    }

    // unableToCreateEmployeeRecordWhenEmailIsMissing
}
