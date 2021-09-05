@extends("todos.layout")

<title>@section("title", "Todos")</title>
@section("body-h1", "All Your Todos")

@section("button")
<a href="{{  route('todo.create') }}" class="mx-5 py-1 px-1 bg-gradient-to-r from-green-400 to-blue-500 hover:from-pink-500 hover:to-yellow-500 cursor-pointer rounded text-white">New Todo</a>
@endsection("button")
@section("body")
<ul>
    @foreach($todos as $todo)
    <li class="flex justify-between py-2">
        <p>{{ $todo->title }}</p>
        <div>
            <a href="{{'/todos/'.$todo->id.'/edit'}}" class="mx-5 py-1 px-1 bg-yellow-400 cursor-pointer rounded text-white">Edit</a>
            <span class="fas fa-check px-2"></span>
        </div>
    </li>
    @endforeach
</ul>
@endsection("body")