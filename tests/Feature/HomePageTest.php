<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Event;
use App\EventType;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class HomePageTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     *
     * @test
     */
    public function showDisplayOnGoingEvent()
    {
        $eventtype = factory(EventType::class)->create();
/*
        $event = factory(Event::class)->create(['title' => 'iDeyaHack', 'status' => 'on-going', 'type_id' => $eventtype->id]);*/
        $event = factory(Event::class)->create(
            [
                'title' => 'iDeyaHack',
                'status' => 'on-going',
                'type_id' => $eventtype->id,
            ]
        );

        $response = $this->get(route('home'));

        $response->assertStatus(200);
        $response->assertSeeText('iDeyaHack');
    }
}
