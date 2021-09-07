@extends("todos.layout")

<title>@section("title", "Edit")</title>
@section("body-h1", "Modify Your Todo #$todo->id")
@section("button")
<a href="{{ route('todo.index') }}" class="mx-5 py-1 px-1 bg-gradient-to-r from-green-400 to-blue-500 hover:from-pink-500 hover:to-yellow-500 cursor-pointer rounded text-white">Todo List</a>
@endsection("button")
@section("body")
<form action="{{ route('todo.update', $todo->id) }}" method="post" class="py-5">
    @csrf
    @method('patch')
    <input type="text" name="title" value="{{ $todo->title }}" class="py-2 px-2 border rounded" />
    <input type="submit" value="create" class="p-2 border rounded" />
</form>
<a href="{{ route('todo.index') }}" class="mx-5 p-2 cursor-pointer rounded text-white">
    <span class="fas fa-arrow-alt-circle-left text-3xl text-blue-400 hover:text-blue-900" />
</a>
@endsection("body")