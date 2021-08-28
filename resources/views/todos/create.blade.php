@extends("todos.layout")

<title>@section("title", "Create")</title>
@section("body-h1", "What do you need To-Do ?")
@section("button")
<a href="{{ route('todo.index') }}" class="mx-5 py-1 px-1 bg-blue-400 cursor-pointer rounded text-white">Todo List</a>
@endsection("button")
@section("body")
<form action="/todos/create" method="post" class="py-5">
    @csrf
    <input type="text" name="title" class="py-2 px-2 border rounded" />
    <input type="submit" value="create" class="p-2 border rounded" />
</form>
@endsection("body")