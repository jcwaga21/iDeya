<?php

namespace Tests\Browser\Guest;

use App\GuestAttendance;
use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class RegistrationTest extends DuskTestCase
{
    use DatabaseMigrations;
    /**
     * A Dusk test example.
     *
     * @return void
     * @test
     * @group guest
     */
    public function successfulGuestRegistration()
    {
        $this->browse(function (Browser $browser) {
            $response = $browser->visit(route("home"))
                    ->click('#guest')
                    ->waitForText("Guest Registration")
                    ->type('first_name','Jane')
                    ->type('last_name','Doe')
                    ->type('email','jane@gmail.com')
                    ->type('contact_number','09162546254')
                    ->type('schoolorganization','MSU-IIT')
                    ->type('purpose','consultation')
                    ->click('#submit');

            $response->assertSee('Welcome, Jane');
        });
    }

    /**
     * A Dusk test example.
     *
     * @return void
     * @test
     * @group guest
     */

    public function shouldReturnErrorIfFirstnameAndLastnameIsNotFilled()
    {
        $this->browse(function (Browser $browser) {
            $response = $browser->visit(route("home"))
                ->click('#guest')
                ->waitForText("Guest Registration")
                ->type('email','jane@gmail.com')
                ->type('contact_number','09162546254')
                ->type('schoolorganization','MSU-IIT')
                ->type('purpose','consultation')
                ->click('#submit');

            $response->assertSee('required');
        });
    }

    public function shouldReturnErrorIfEmailIsNotFilled()
    {
        $this->browse(function (Browser $browser) {
            $response = $browser->visit(route("home"))
                ->click('#guest')
                ->waitForText("Guest Registration")
                ->type('first_name','Jane')
                ->type('last_name','Doe')
                ->type('contact_number','09162546254')
                ->type('schoolorganization','MSU-IIT')
                ->type('purpose','consultation')
                ->click('#submit');

            $response->assertSee('required');
        });
    }
}
