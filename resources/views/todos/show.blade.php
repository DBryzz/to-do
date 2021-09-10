@extends("todos.layout")

<title>@section("title", "Create")</title>
@section("body-h1", "{{ $todo->title }}")
@section("button")
<a href="{{  route('todo.index') }}" class="mx-5 py-2 cursor-pointer text-white">
    <span class="fas fa-arrow-alt-circle-left text-xl text-blue-400 hover:text-blue-900" />
</a>
@endsection("button")

@section("body")
{{ $todo->description }}
@endsection("body")