@extends("todos.layout")

<title>@section("title", "Edit")</title>
@section("body-h1", "Modify Your Todo #$todo->id")
@section("button")
<a href="{{ route('todo.index') }}" class="mx-5 py-1 px-1 bg-blue-400 cursor-pointer rounded text-white">Todo List</a>
@endsection("button")
@section("body")
<form action="{{ route('todo.update', $todo->id) }}" method="post" class="py-5">
    @csrf
    @method('patch')
    <input type="text" name="title" value="{{ $todo->title }}" class="py-2 px-2 border rounded" />
    <input type="submit" value="create" class="p-2 border rounded" />
</form>
@endsection("body")