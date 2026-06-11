<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function dashboard()
    {
        $total = Task::count();
        $completed = Task::where('completed', true)->count();
        $pending = Task::where('completed', false)->count();

        $upcoming = Task::selectRaw('due_date, count(*) as total')
            ->where('completed', false)
            ->groupBy('due_date')
            ->orderBy('due_date')
            ->get();

        return view('dashboard', compact(
            'total',
            'completed',
            'pending',
            'upcoming'
        ));
    }

    public function index()
    {
        $tasks = Task::latest()->get();
        return view('tasks.index', compact('tasks'));
    }

    public function create()
    {
        return view('tasks.create');
    }

    public function store(Request $request)
    {
        Task::create($request->all());

        return redirect('/tasks')
            ->with('success', 'Tugas berhasil ditambahkan');
    }

    public function edit(Task $task)
    {
        return view('tasks.edit', compact('task'));
    }

    public function update(Request $request, Task $task)
    {
        $task->update($request->all());

        return redirect('/tasks');
    }

    public function destroy(Task $task)
    {
        if (!$task->completed) {
            $task->delete();
        }

        return back();
    }

    public function complete(Task $task)
    {
        $task->update([
            'completed' => true,
            'completed_at' => now()
        ]);

        return back();
    }

    public function report(Request $request)
    {
        $tasks = Task::where('completed', true)
            ->when($request->start, function ($q) use ($request) {
                $q->whereDate('completed_at', '>=', $request->start);
            })
            ->when($request->end, function ($q) use ($request) {
                $q->whereDate('completed_at', '<=', $request->end);
            })
            ->get();

        return view('report', compact('tasks'));
    }
}