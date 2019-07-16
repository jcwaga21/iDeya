<?php

namespace Tests\Browser\Registration;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class GuestRegistrationTest extends DuskTestCase
{
    use DatabaseMigrations;
    /**
     * @test
     * @group guest
     */
    public function successfulConsultationRegistration()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit(route('home'))
                ->click("#Co-Working-Guest")
                ->type('first_name','Jane')
                ->type('last_name','Doe')
                ->type('email','jane@gmail.com')
                ->type('contact_number','09358714654')
                ->type('schoolorganization','MSU-IIT')
                ->select('purpose','consultation')
                ->click('#submit')
                ->assertSee('Welcome, Jane');
        });
    }
}
