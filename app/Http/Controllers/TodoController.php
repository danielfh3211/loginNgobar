<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todo;

class TodoController extends Controller
{
    public function index()
    {
        $todos = Todo::all();
        return view('dashboard', compact('todos'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        Todo::create($request->only('title', 'description'));

        return redirect()->route('dashboard');
    }

    public function destroy(Todo $todo)
    {
        $todo->delete();
        return redirect()->route('dashboard');
    }
}
