<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;
use App\Http\Requests\TodoRequest;

class TodoController extends Controller
{
    public function index()
    {
        $todos = Todo::all();
        return view('todolist', ['todos' => $todos]);
    }

    public function create(TodoRequest $request)
    {
        $form = $request->all();
        Todo::create($form);
        return redirect('/');
    }

    public function update(TodoRequest $request)
    {
        $form = Todo::find($request->id);
        $form->name = $request->name;
        Todo::where('id', $request->id)->update(['name' => $form->name]);
        return redirect('/');
    }    

    public function delete(TodoRequest $request)
    {
        Todo::find($request->id)->delete();
        return redirect('/');
    }

}