<?php

use App\Enums\TaskStatus;
use App\Models\User;
use Database\Seeders\RoleAndPersmissionsSeeder;

beforeEach(function () {

    $this->seed(RoleAndPersmissionsSeeder::class);

    $this->admin = create(User::class);

    $this->admin->assignRole('admin');

    $this->actingAS($this->admin);

});

it('can create task', function () {
    $payload = [
        'title' => 'Task Title',
        'description' => 'Task Description',
        'status' => TaskStatus::Pending->value,
        'assigned_to' => $this->admin->id,
    ];

    $this->post('/tasks', $payload)
        ->assertRedirect();

    $this->assertDatabaseHas('tasks', $payload);
});

it('can update task', function () {});

it('can delete task', function () {});

it('can view task', function () {});

it('can view all tasks', function () {});

it('can show only task that assigned to them', function () {});

it('can filter tasks by status', function () {});

it('can filter by assigned user', function () {});
