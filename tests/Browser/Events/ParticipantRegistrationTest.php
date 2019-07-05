<?php

namespace Tests\Browser\Events;

use App\Event;
use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class ParticipantRegistrationTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function testSuccessfulRegistration()
    {
        $this->browse(function (Browser $browser) {

            $event=factory(Event::class)->create();

            $browser->visit(route('event.register', compact('event')))

                ->type('first_name', 'Dominique')
                ->type('last_name', 'Baes')
                ->type('school', 'MSU-IIT')
                ->type('contact', '09755007874')
                ->check('is_firsttime')
                ->click('#add_participant')

                ->assertUrlIs(route('event.welcome'))
                ->assertSee('Dominique');
        });
    }
}
