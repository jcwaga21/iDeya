<?php

namespace Tests\Browser\Events;

use Carbon\Carbon;
use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use App\EventType;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Tests\Helpers\UserFactoryHelper;

class CreateEventTest extends DuskTestCase
{
    use DatabaseMigrations;
    use UserFactoryHelper;

    /**
     * A Dusk test example.
     *@group CreateEvent
     * @test
     */
    public function testSuccessfulCreatedEvent()
    {

        //required
        $this->browse(function (Browser $browser) {

            factory(EventType::class)->create(['name' => 'domskie']);

            $browser->loginAs($this->mockAdminUser())->visit(route('adminevent.create'))

                    ->type('title', 'Hackathon')
                    ->select('type_id', '1')
                    ->type('date', '2019-08-14')
                    ->type('expected_no', '20')
                    ->type('guestspeaker', 'Doctor Strange')
                    ->type('eventbudget', '2000')
                    ->type('reg_fee', '100')
                    ->select('no_of_days', '2')
                    ->click('#add_event')

                    ->assertUrlIs(route('adminevent.index'))
                    ->assertSee('domskie');
        });
    }
}
