@extends("todos.layout")

<title>@section("title", "Todos")</title>
@section("body-h1", "All Your Todos")

@section("button")
<a href="{{  route('todo.create') }}" class="mx-5 py-1 px-1 bg-blue-400 cursor-pointer rounded text-white">New Todo</a>
@endsection("button")
@section("body")
<ul>
    @foreach($todos as $todo)
    <li class="flex justify-center py-2">
        <p>{{ $todo->title }}</p>
        <a href="{{'/todos/'.$todo->id.'/edit'}}" class="mx-5 py-1 px-1 bg-orange-400 cursor-pointer rounded text-white">Edit</a>
    </li>
    @endforeach
</ul>
@endsection("body")