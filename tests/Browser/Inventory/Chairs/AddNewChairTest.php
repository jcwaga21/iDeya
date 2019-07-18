<?php

namespace Tests\Browser\Inventory\Chairs;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\WithFaker;

class AddNewChairTest extends DuskTestCase
{
    use WithFaker;
    /**
     * A Dusk test example.
     *
     * @group Inventory
     */
    public function testExample()
    {
        $this->browse(function (Browser $browser) {
            $model = $this->faker->name;

            $browser->visit(route('inventory.create'))
                ->type('model', $model)
                ->type('description', $this->faker->sentence)
                ->click('#submit')
                    ->assertSee($model);
        });
    }
}
