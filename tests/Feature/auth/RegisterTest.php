<?php

use App\Models\User;
use App\Providers\RouteServiceProvider;
use Database\Seeders\RoleAndPersmissionsSeeder;

beforeEach(function () {
    $this->seed(RoleAndPersmissionsSeeder::class);
});

it('can register to out portal', function () {
    $payload = [
        'name' => 'wali',
        'email' => 'wali@gmail.com',
        'password' => 'password',
        'password_confirmation' => 'password',
    ];

    $this->post('/register', $payload)
        ->assertRedirect(RouteServiceProvider::HOME);

    $this->assertDatabaseHas('users', [
        'name' => $payload['name'],
        'email' => $payload['email'],
    ]);

});

it('requires name, email, and password to register', function () {
    $this->post('/register', [
        'name' => '',
        'email' => '',
        'password' => '',
        'password_confirmation' => '',
    ])->assertRedirect()
        ->assertSessionHasErrors(['name', 'email', 'password']);
});

it('requires a valid email format to register', function () {
    $this->post('/register', [
        'name' => 'Test User',
        'email' => 'invalid-email',
        'password' => 'password',
        'password_confirmation' => 'password',
    ])->assertRedirect()
        ->assertSessionHasErrors(['email']);
});

it('requires password confirmation to match', function () {
    $this->post('/register', [
        'name' => 'Test User',
        'email' => 'test@example.com',
        'password' => 'password',
        'password_confirmation' => 'wrongpassword',
    ])->assertRedirect()
        ->assertSessionHasErrors(['password']);
});

it('does not allow duplicate emails', function () {
    create(User::class, ['email' => 'duplicate@example.com']);

    $this->post('/register', [
        'name' => 'New User',
        'email' => 'duplicate@example.com',
        'password' => 'password',
        'password_confirmation' => 'password',
    ])->assertRedirect()
        ->assertSessionHasErrors(['email']);
});

it('requires a password of minimum length', function () {
    $this->post('/register', [
        'name' => 'Test User',
        'email' => 'test@example.com',
        'password' => 'short', // Password too short
        'password_confirmation' => 'short',
    ])->assertRedirect()
        ->assertSessionHasErrors(['password']); // Expecting an error for the password field
});
