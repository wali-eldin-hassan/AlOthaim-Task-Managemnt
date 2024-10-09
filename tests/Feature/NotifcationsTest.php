<?php

use App\Models\Task;
use App\Models\User;
use App\Notifications\TaskAssignedNotification;

it('can get his notifications', function () {
    $user = create(User::class);

    $task = create(Task::class);

    $task->user->notify(new TaskAssignedNotification($task));

    $this->actingAs($user)
        ->get('/dashboard')
        ->assertOk()
        ->assertViewHas('notifications');

});

it('can mark his notifications as read', function () {
    $user = create(User::class);

    $task = create(Task::class, ['assigned_to' => $user->id]);

    $task->user->notify(new TaskAssignedNotification($task));

    $this->actingAs($user)
        ->post(route('notifications.markAllAsRead'))
        ->assertRedirect();

    $user->refresh();
    foreach ($user->unreadNotifications as $notification) {
        $this->assertNotNull($notification->read_at);
    }
});
