<?php

namespace Database\Seeders;

use App\Enums\TaskStatus;
use App\Models\Task;
use App\Models\User;
use Illuminate\Database\Seeder;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user1 = User::find(1);

        $user2 = User::find(2);

        $tasks = [
            [
                'title' => 'Task 1',
                'description' => 'This is a pending task for User 1',
                'status' => TaskStatus::Pending->value,
                'assigned_to' => $user1->id,
            ],
            [
                'title' => 'Task 2',
                'description' => 'This is a task in progress for User 1',
                'status' => TaskStatus::InProgress->value,
                'assigned_to' => $user1->id,
            ],
            [
                'title' => 'Task 3',
                'description' => 'This is a completed task for User 1',
                'status' => TaskStatus::Completed->value,
                'assigned_to' => $user1->id,
            ],
            [
                'title' => 'Task 4',
                'description' => 'This is a pending task for User 2',
                'status' => TaskStatus::Pending->value,
                'assigned_to' => $user2->id,
            ],
            [
                'title' => 'Task 5',
                'description' => 'This is a task in progress for User 2',
                'status' => TaskStatus::InProgress->value,
                'assigned_to' => $user2->id,
            ],
            [
                'title' => 'Task 6',
                'description' => 'This is a completed task for User 2',
                'status' => TaskStatus::Completed->value,
                'assigned_to' => $user2->id,
            ],
            [
                'title' => 'Task 7',
                'description' => 'This is a pending task for User 3',
                'status' => TaskStatus::Pending->value,
                'assigned_to' => $user2->id,
            ],
            [
                'title' => 'Task 8',
                'description' => 'This is a task in progress for User 3',
                'status' => TaskStatus::InProgress->value,
                'assigned_to' => $user2->id,
            ],
            [
                'title' => 'Task 9',
                'description' => 'This is a completed task for User 3',
                'status' => TaskStatus::Completed->value,
                'assigned_to' => $user2->id,
            ],
            [
                'title' => 'Task 10',
                'description' => 'This is another pending task for User 1',
                'status' => TaskStatus::Pending->value,
                'assigned_to' => $user1->id,
            ],
        ];

        foreach ($tasks as $task) {
            Task::create($task);
        }
    }
}
