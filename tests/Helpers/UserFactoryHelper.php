<?php

namespace Tests\Helpers;

use App\User;

trait UserFactoryHelper
{
    public function mockAdminUser()
    {
        return factory(User::class)->create();
    }
}
