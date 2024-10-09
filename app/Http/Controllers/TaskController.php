<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTaskRequest;
use App\Http\Requests\UpdateTaskRequest;
use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    //    function ()
    //    {
    //        $this->authorize('tasks', Task::class);
    //    }

    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $tasks = auth()->user()->hasRole('user') ?
            auth()->user()->tasks()->latest()->get() :
            Task::latest()->get();

        //        $tasks->when($request->status, function ($query) use ($request) {
        //            $query->where('status', $request->status);
        //        });

        return view('tasks.index', ['tasks' => $tasks]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTaskRequest $request)
    {
        Task::create($request->validated());

        return redirect()->route('tasks.index')->with('success', __('task created successfully'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('tasks.create');
    }

    /**
     * Display the specified resource.
     */
    public function show(Task $task)
    {
        return view('tasks.show', ['task' => $task]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Task $task)
    {
        return view('tasks.edit', ['task' => $task]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTaskRequest $request, Task $task)
    {
        $task->update($request->validated());

        return redirect()->route('tasks.index')->with('success', __('task updated successfully'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Task $task)
    {
        $task->delete();

        return back()->with('success', __('task deleted successfully'));
    }
}
