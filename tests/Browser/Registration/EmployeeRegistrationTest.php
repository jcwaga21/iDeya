<?php

namespace Tests\Browser\Registration;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class EmployeeRegistrationTest extends DuskTestCase
{
    use DatabaseMigrations;
    /**
     * A Dusk test example.
     *
     * @return void
     * @test
     * @group employee
     */
    public function successfulEmployeeRegistrationAndShouldChangePassword()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit(route('home'))
                ->click("#Co-Working-Guest")
                ->type('first_name', 'Jane')
                ->type('last_name', 'Doe')
                ->type('email', 'jane@gmail.com')
                ->type('contact_number', '09358714654')
                ->type('schoolorganization', 'MSU-IIT')
                ->select('purpose', 'employee')
                ->click('#submit')
                ->assertSee('Change Password');
        });
    }

    /**
     * @test
     * @group employee
     */
    public function successfulEmployeeRegistrationWithoutSchoolOrganizationAndShouldChangePassword()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit(route('home'))
                ->click("#Co-Working-Guest")
                ->type('first_name', 'Jane')
                ->type('last_name', 'Doe')
                ->type('email', 'jane@gmail.com')
                ->type('contact_number', '09358714654')
                ->select('purpose', 'employee')
                ->click('#submit')
                ->assertSee('Change Password');
        });
    }

    /**
     * @test
     * @group employee
     */
    public function errorMissingEmail()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit(route('home'))
                ->click("#Co-Working-Guest")
                ->type('first_name', 'Jane')
                ->type('last_name', 'Doe')
                ->type('contact_number', '09358714654')
                ->type('schoolorganization', 'MSU-IIT')
                ->select('purpose', 'employee')
                ->click('#submit')
                ->assertSee('The email field is required.');
        });
    }

    /**
     * @test
     * @group employee
     */
    public function errorMissingFirstnameAndLastname()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit(route('home'))
                ->click("#Co-Working-Guest")
                ->type('coworking-email', 'jane@gmail.com')
                ->type('contact_number', '09358714654')
                ->type('schoolorganization', 'MSU-IIT')
                ->select('purpose', 'employee')
                ->click('#submit')
                ->assertSee('The first name field is required.')
                ->assertSee('The first name field is required.');
        });
    }

    /**
     * @test
     * @group employee
     */
    public function errorMissingContactNumber()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit(route('home'))
                ->click("#Co-Working-Guest")
                ->type('first_name', 'Jane')
                ->type('last_name', 'Doe')
                ->type('coworking-email', 'jane@gmail.com')
                ->type('schoolorganization', 'MSU-IIT')
                ->select('purpose', 'employee')
                ->click('#submit')
                ->assertSee('The contact number field is required.');
        });
    }
}
