<?php

use App\Enums\TaskStatus;
use App\Models\Task;
use App\Models\User;

beforeEach(function () {

    $this->user = create(User::class);
    $this->anotherUser = create(User::class);

    create(Task::class, [
        'assigned_to' => $this->user->id,
        'status' => TaskStatus::Pending,
    ]);

    create(Task::class, [
        'assigned_to' => $this->user->id,
        'status' => TaskStatus::InProgress,
    ]);

    create(Task::class, [
        'assigned_to' => $this->user->id,
        'status' => TaskStatus::Completed,
    ]);

});

it('filters tasks by status', function () {
    $response = $this->actingAs($this->user)
        ->get(route('tasks.index', ['status' => TaskStatus::Pending]));

    $response->assertStatus(200);

    $response->assertSee(TaskStatus::Pending->label());
});

it('filters tasks by user', function () {
    $response = $this->actingAs($this->user)
        ->get(route('tasks.index', ['assigned_user' => $this->user->id]));

    $response->assertStatus(200);

    $response->assertSee($this->user->name);
});

it('filters tasks by status and user', function () {
    $response = $this->actingAs($this->user)
        ->get(route('tasks.index', [
            'status' => TaskStatus::Pending,
            'assigned_user' => $this->user->id,
        ]
        ));

    $response->assertStatus(200);

    $response->assertSee(TaskStatus::Pending->label());
    $response->assertSee($this->user->name);
});
