<?php

namespace Tests\Browser\Events;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use App\EventType;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class CreateEventTest extends DuskTestCase
{
    use DatabaseMigrations;

    /**
     * A Dusk test example.
     *
     * @test
     */
    public function testSuccessfulCreatedEvent()
    {

        //required
        $this->browse(function (Browser $browser) {
            
            factory(EventType::class)->create(['name'=> 'doms']);

            $browser->visit(route('events.create'))
                    
                    ->type('title', 'Hackathon')
                    ->select('type_id', '1')
                    ->type('date', '31/12/19')
                    ->type('expected_no', '20')
                    ->type('guestspeaker', 'Doctor Strange')
                    ->type('eventbudget', '2000')
                    ->type('reg_fee', '100')
                    ->select('no_of_days', '2')
                    ->click('#add_event')

                    ->assertUrlIs(route('events.index'))
                    ->assertSee('doms');
        });
    }
}
