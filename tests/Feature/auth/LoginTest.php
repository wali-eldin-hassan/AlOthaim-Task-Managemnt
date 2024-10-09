<?php

use App\Models\User;
use App\Providers\RouteServiceProvider;

it('can login to our portal', function () {
    create(User::class, ['email' => 'test@example.com', 'password' => 'password']);

    $this->post(route('login'), ['email' => 'test@example.com', 'password' => 'password'])
        ->assertRedirect(RouteServiceProvider::HOME);
});

it('can not login if his data is not valid', function () {
    $this->post(route('login.store'), ['email' => 'test1@example.com', 'password' => 'password'])
        ->assertRedirect()
        ->assertSessionHasErrors(['email' => 'These credentials do not match our records.']);
});

it('requires an email and password', function () {
    $this->post(route('login.store'), ['email' => '', 'password' => ''])
        ->assertRedirect()
        ->assertSessionHasErrors(['email', 'password']);
});

it('requires a valid email format', function () {
    $this->post(route('login.store'), ['email' => 'invalid-email', 'password' => 'password'])
        ->assertRedirect()
        ->assertSessionHasErrors(['email' => 'The email field must be a valid email address.']);
});

it('cannot access login page if already authenticated', function () {
    $user = create(User::class);

    $this->actingAs($user)
        ->get(route('login'))
        ->assertRedirect(RouteServiceProvider::HOME);
});

it('can logout successfully', function () {
    $user = create(User::class);

    $this->actingAs($user)
        ->post(route('logout'))
        ->assertRedirect('/login');
});
