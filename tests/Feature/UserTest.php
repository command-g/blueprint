<?php

use App\Models\User;

declare(strict_types=1);

it('can store a user in the database', function () {
    User::create([
        'name' => fake()->name(),
        'email' => fake()->email(),
        'password' => fake()->password(8),
    ]);

    $this->assertDatabaseCount('users', 1);
});
