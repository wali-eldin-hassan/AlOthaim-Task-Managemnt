<?php

use App\Enums\TaskStatus;
use App\Models\Task;
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

it('can update task', function () {

    $this->task = create(Task::class, ['assigned_to' => $this->admin->id]);

    $payload = [
        'title' => 'Task Title',
    ];

    $this->put("/tasks/{$this->task->id}", $payload)
        ->assertRedirect();

    $this->assertDatabaseHas('tasks', [
        'title' => $payload['title'],
    ]);

});

it('can delete task', function () {
    $this->task = create(Task::class, ['assigned_to' => $this->admin->id]);

    $this->delete("/tasks/{$this->task->id}")
        ->assertRedirect();

    $this->assertDatabaseMissing('tasks', ['id' => $this->task->id]);
});

it('can view task', function () {
    $this->task = create(Task::class, ['assigned_to' => $this->admin->id]);

    $this->get("/tasks/{$this->task->id}")
        ->assertOk()
        ->assertViewHas('task', function ($task) {
            return $task->id === $this->task->id;
        });
});

it('can show only task that assigned to them', function () {
    $otherUser = create(User::class);

    create(Task::class, ['assigned_to' => $otherUser->id]);

    $this->task = create(Task::class, ['assigned_to' => $this->admin->id], 3);

    $this->get('/tasks')
        ->assertOk()
        ->assertViewHas('tasks', function ($tasks) {
            return $tasks->count() === 3;
        });
});
