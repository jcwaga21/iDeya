<?php

namespace Tests\Browser\Office;

use App\User;
use Illuminate\Support\Facades\Hash;
use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class LogOutTest extends DuskTestCase
{
    use DatabaseMigrations;
    /**
     * A Dusk test example.
     * @test
     * @group logout
     * @return void
     */
    public function successfullyLogOut()
    {
        factory(User::class)->create([
            'email' => 'jcwaga21@gmail.com',
            'password' => Hash::make('secret'),
        ]);
        $this->browse(function (Browser $browser) {
            $response = $browser->visit(route('office.login'))
                ->type('email', 'jcwaga21@gmail.com')
                ->type('password', 'secret')
                ->click('#login')
                ->assertSee('Welcome!');


            $response->clickLink('Log Out')->assertSee('Login');

        });
    }
}
