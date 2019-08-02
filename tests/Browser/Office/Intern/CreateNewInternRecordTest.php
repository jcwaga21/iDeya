<?php

namespace Tests\Browser\Office\Intern;

use App\User;
use Modules\Office\Entities\Employee;
use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Tests\Helpers\UserFactoryHelper;

class CreateNewInternRecordTest extends DuskTestCase
{
    use DatabaseMigrations;
    use UserFactoryHelper;
    /**
     * A Dusk test example.
     * @test
     * @group intern
     * @group successfullyRecordedNewIntern
     * @return void
     */
    public function successfullyRecordedNewIntern()
    {

        $this->browse(function (Browser $browser) {
            $email = 'jc@gmail.com';
            $this->mockAdminUser($email);
            $response = $browser->visit(route('office.login'))
                ->type('email', $email)
                ->type('password', 'password')
                ->click('#login');

            $response->clickLink('Users')
                ->click('#create-intern')
                ->type('first_name', 'Jade')
                ->type('last_name', 'Doe')
                ->type('contact_number', '09123456789')
                ->type('email', 'jade@gmail.com')
                ->click('#add_intern')
                ->assertSee('User Listing')
                ->assertSee('Jade Doe');

            $this->assertDatabaseHas(
                'users',
                [
                    'email' => 'jade@gmail.com',
                    'type' => 'internship'
                ]
            );
        });
    }

    /**
     *
     * @test
     * @group intern
     * @group errorMissingEmail
     * @return void
     */
    public function errorMissingEmail()
    {
        $this->browse(function (Browser $browser) {
            $email = 'jc@gmail.com';
            $this->mockAdminUser($email);
            $response = $browser->visit(route('office.login'))
                ->type('email', $email)
                ->type('password', 'password')
                ->click('#login');

            $response->clickLink('Users')
                ->click('#create-intern')
                ->type('first_name', 'Jade')
                ->type('last_name', 'Doe')
                ->type('contact_number', '09123456789')
                ->click('#add_intern')
                ->assertSee('The email field is required.');

            $this->assertDatabaseMissing(
                'users',
                [
                    'email' => 'jade@gmail.com',
                    'type' => 'internship'
                ]
            );
        });
    }
}
