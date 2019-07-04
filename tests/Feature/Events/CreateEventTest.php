<?php

namespace Tests\Feature\Events;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class CreateEventTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @test
     */
    public function testSuccessfullyCreatedEvent()
    {
        $this->markTestIncomplete();

        $response = $this->get('/');

        $response->assertStatus(200);
    }

    //public function testUnsuccessfulCreatedEvent(){

    //}
}
