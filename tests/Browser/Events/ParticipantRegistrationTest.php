<?php

namespace Tests\Browser\Events;

use App\Event;
use App\EventType;
use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class ParticipantRegistrationTest extends DuskTestCase
{
    use DatabaseMigrations;

    /**
     * A Dusk test example.
     *
     * @return void
     * @group eventParticipant
     */
    public function testSuccessfulRegistration()
    {
        $this->browse(function (Browser $browser) {

            $eventtype = factory(EventType::class)->create();
            $event = factory(Event::class)->create(['type_id' => $eventtype->id]);

            $browser->visit(route('register', compact('event')))

                ->type('first_name', 'Dominique')
                ->type('last_name', 'Baes')
                ->type('email', 'dominique@gmail.com')
                ->type('school', 'MSU-IIT')
                ->type('contact', '09755007874')
                ->check('is_firsttime')
                ->click('#add_participant')

                ->assertSee('Welcome, Dominique');
        });
    }
}
