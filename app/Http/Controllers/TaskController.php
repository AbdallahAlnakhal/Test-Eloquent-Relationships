<?php

namespace App\Http\Controllers;

use auth;
use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index()
    {
        $tasks = Task::with('user')->get();
        return view('tasks.index', compact('tasks'));
    }


public function store(Request $request)
{

    Task::create([
        'name' => $request->name,
        'id' => auth()->user() ? auth()->user()->id : null,
    ]);

    return 'Success';
}
}
