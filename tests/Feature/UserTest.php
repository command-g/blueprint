<?php

declare(strict_types=1);

use App\Models\User;

it('can store a user in the database', function () {
    User::create([
        'name' => fake()->name(),
        'email' => fake()->email(),
        'password' => fake()->password(8),
    ]);

    $this->assertDatabaseCount('users', 1);
});
