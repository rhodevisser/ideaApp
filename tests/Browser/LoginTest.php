<?php

use App\Models\User;

it('logs in a user', function (): void {
    $user = User::factory()->create(['password' => 'password' ]);
    visit('/login')
        ->fill('email', $user->email)
        ->fill('password', 'password')
        ->click('@login-btn')
        ->assertPathIs('/');

    $this->assertAuthenticated();
});

it('logs out a user', function (): void {
    $user = User::factory()->create();

    Auth::login($user);

    visit('/')->click('Log Out');

    $this->assertGuest();
});

