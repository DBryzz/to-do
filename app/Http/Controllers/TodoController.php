<?php

namespace App\Http\Controllers;

use App\Http\Requests\TodoCreateRequest;
use App\Models\Todo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class TodoController extends Controller
{
    //
    public function index(Type $var = null)
    {
        # code...
        return view('todos.index');
    }


    public function create(Type $var = null)
    {
        # code...
        return view('todos.create');
    }


    public function store(TodoCreateRequest $request)
    {
        # code...

        /* $rules = [
            'title' => 'required|max:255',
        ];

        $messages = [
            'required' => 'You must fill in the title',
            'max' => 'Todo title should not exceed 255 characters',
        ]; 

        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->fails()) {
            # code...
            return redirect()->back()->withErrors($validator)->withInput();
        }*/

        /* $request->validate([
            'title' => 'required|max:255',
        ]); */

        Todo::create($request->all());
        return redirect()->back()->with('message', 'Todo Created Successfully');
    }


    public function edit(Type $var = null)
    {
        # code...
        return view('todos.edit');
    }
}
