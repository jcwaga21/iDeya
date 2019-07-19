<?php

namespace Tests\Browser\Inventory\Chairs;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\WithFaker;


class AddNewChairTest extends DuskTestCase
{
    use WithFaker;
    use DatabaseMigrations;
    /**
     * A Dusk test example.
     *
     * @group Inventory
     */
    public function testSuccessfullyAddedChair()
    {
        $this->browse(function (Browser $browser) {
            $brand = $this->faker->name;

            $browser->visit(route('inventory.create'))

                ->type('name',$brand)
                ->type('description',$this->faker->sentence)
                ->type('quantity',21)
                ->type('brand','Mandaue Foam')
                ->click('#submit')
                    ->assertSee($brand);
        });
    }
}
