<?php

namespace Tests\Browser\CoWorking;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class CoWorkingRegistrationTest extends DuskTestCase
{
    use DatabaseMigrations;
    /**
     * A Dusk test example.
     *
     * @return void
     * @test
     * @group coworking
     */
    public function successfulCoWorkingRegistration()
    {
        $this->browse(function (Browser $browser) {
            $response = $browser->visit(route("home"))
                ->click('#Co-Working')
                ->waitForText("Co-Working Registration")
                ->type('first_name','Jane')
                ->type('last_name','Doe')
                ->type('email','jane@gmail.com')
                ->type('contact_number','09162546254')
                ->click('#submit');

            $response->assertSee('Welcome, Jane');
        });
    }

    /**
     * A Dusk test example.
     *
     * @return void
     * @test
     * @group coworking
     */

    public function shouldReturnErrorIfFirstnameAndLastnameIsNotFilled()
    {
        $this->browse(function (Browser $browser) {
            $response = $browser->visit(route("home"))
                ->click('#Co-Working')
                ->waitForText("Co-Working Registration")
                ->type('email','jane@gmail.com')
                ->type('contact_number','09162546254')
                ->click('#submit');

            $response->assertSee('required');
        });
    }

    public function shouldReturnErrorIfEmailIsNotFilled()
    {
        $this->browse(function (Browser $browser) {
            $response = $browser->visit(route("home"))
                ->click('#Co-Working')
                ->waitForText("Co-Working Registration")
                ->type('first_name','Jane')
                ->type('last_name','Doe')
                ->type('contact_number','09162546254')
                ->click('#submit');

            $response->assertSee('required');
        });
    }

}
