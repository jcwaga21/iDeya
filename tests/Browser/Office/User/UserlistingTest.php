<?php

namespace Tests\Browser\Office\User;

use App\User;
use Modules\Office\Entities\Employee;
use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class UserlistingTest extends DuskTestCase
{
    use DatabaseMigrations;

    /**
     * A Dusk test example.
     * @test
     * @group successfullyDisplayRecords
     * @return void
     */
    public function successfullyDisplayRecords()
    {
        $employee = factory(Employee::class)
            ->create([
                'email' => 'jc@gmail.com',
                'first_name' => 'Jade',
                'last_name' => 'Doe',
                'contact_number' => '09358711471']);

        factory(User::class)->create(['email' => $employee->email]);

        $this->browse(function (Browser $browser) {
            $response = $browser->visit(route('office.login'))
                ->type('email', 'jc@gmail.com')
                ->type('password', 'password')
                ->click('#login')
                ->assertSee('Welcome');

            $response->clickLink('Users')
                ->assertSee('User Listing')
                ->assertSee('Jade Doe')
                ->assertSee('09358711471')
                ->assertSee('jc@gmail.com')
                ->assertSee('employee');

        });
    }
}
