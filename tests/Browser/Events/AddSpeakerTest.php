<?php

namespace Tests\Browser\Events;

use App\Event;
use App\Speaker;
use App\EventType;
use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class AddSpeakerTest extends DuskTestCase
{
    use DatabaseMigrations;

    /**
     * A Dusk test example.
     *
     * @test void
     */
    public function testSuccessfullyAddedSpeaker()
    {
        $this->browse(function (Browser $browser) {

            $eventtype = factory(EventType::class)->create();
            $event = factory(Event::class)->create(['type_id' => $eventtype->id]);

            $browser->visit(route('speaker', compact('event')))

            ->type('first_name', 'Dominique')
            ->type('last_name', 'Baes')
            ->type('email', 'dominique@gmail.com')
            ->type('organization', 'Google')
            ->type('profession', 'CEO')
            ->type('contact', '09755007874')
            ->click('#add_speaker')

            ->assertSee('Welcome, Dominique');
        });
    }
}
