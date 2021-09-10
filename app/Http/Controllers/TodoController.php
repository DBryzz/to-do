<?php

namespace App\Http\Controllers;

use App\Http\Requests\TodoCreateRequest;
use App\Models\Todo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class TodoController extends Controller
{
    //

    public function __construct()
    {
        # code...
        $this->middleware('auth')->except('index');
    }

    public function index(Type $var = null)
    {
        # code...
        # $todos = Todo::all();
        #$todos = Todo::orderBy('completed', 'asc')->get();
        // return view('todos.index')->with(['todos' => $todos]);
        /*$todos = auth()->user()->todos()->orderBy('completed', 'asc')->get();

        OR*/
        $todos = auth()->user()->todos->sortBy('completed');
        return view('todos.index', compact('todos'));
    }

    public function show(Todo $todo)
    {
        # code...
        return view('todos.show', compact('todo'));
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

        /*
        $userId = auth()->id();
        $request['user_id'] = $userId;
        Todo::create($request->all());
        OR
*/
        auth()->user()->todos()->create($request->all());
        return redirect()->back()->with('message', 'Todo Created Successfully');
    }


    public function edit(Todo $todo)
    {
        # Instead of passing id and using find($id), could use Todo shortcut. 
        # If the route has id then use $id, in our case it is todo so we have $todo
        /* dd($id->title);
        $todo = Todo::find($id);
        return view('todos.edit', compact('todo')); */

        return view('todos.edit', compact('todo'));
    }

    public function update(Request $request, Todo $todo)
    {
        # code...
        $todo->update(['title' => $request->title]);
        return redirect(route('todo.index'))->with('message', 'Updated!');
    }

    public function complete(Todo $todo)
    {
        # code...
        /* $todo1 = Todo::find($todo->id);
        $todo1->completed = true;
        $todo1->save(); */
        $todo->update(['completed' => true]);
        return redirect()->back()->with('message', 'Task marked as completed!');
    }

    public function incomplete(Todo $todo)
    {
        # code...
        $todo->update(['completed' => false]);
        return redirect()->back()->with('message', 'Task marked as incompleted!');
    }

    public function destroy(Todo $todo)
    {
        # code...
        $todo->delete();
        return redirect()->back()->with('message', 'Task deleted!');
    }
}
