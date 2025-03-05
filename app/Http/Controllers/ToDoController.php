<?php

namespace App\Http\Controllers;
use App\Models\ToDo;

class ToDoController extends Controller
{
    public function index()
    {
        $todos = ToDo::all();
        return view("todos.index", compact("todos"));
    }
    public function show($todo_id) {
        $todo = ToDo::findOrFail($todo_id);
    }
} 

     