<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTaskRequest;
use App\Models\Category;
use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index()
    {
        $tasks = Task::all();
        return view('tasks.index', compact('tasks'));
    }
    public function create()
    {
        $categories = Category::all();
        return view('tasks.create', compact('categories'));
    }

    public function store(StoreTaskRequest $request)
    {
        $validated = $request->validated();
        Task::create($validated);
        return redirect()->route('tasks.index');
    }

    public function edit(Task $task)
    {
        $categories = Category::all();
        return view('tasks.edit', compact('task', 'categories'));
    }

    public function update(Task $task, StoreTaskRequest $request)
    {
        $validated = $request->validated();
        $task->update($validated);
        return redirect()->route('tasks.index');
    }
}
