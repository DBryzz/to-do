@extends("todos.layout")

<title>@section("title", "Create")</title>
@section("body-h1", "What do you need To-Do ?")
@section("button")
<a href="{{ route('todo.index') }}" class="mx-5 py-1 px-1 bg-gradient-to-r from-green-400 to-blue-500 hover:from-pink-500 hover:to-yellow-500 cursor-pointer rounded text-white">Todo List</a>
@endsection("button")

@section("body")
<form action="{{ route('todo.store') }}" method="post" class="py-5">
    @csrf
    <div class="py-1">
        <input type="text" name="title" class="py-2 px-2 border rounded" placeholder="Title" />
    </div>
    <div class="py-1">
        <textarea name="description" class="p-2 border rounded" placeholder="Description"></textarea>
    </div>

    <div class="pt-4 pb-2">
        
        <livewire:step />
    </div>

    <div class="py-1">
        <input type="submit" value="create" class="p-2 bg-blue-300 hover:bg-blue-500 border rounded" />
    </div>

</form>
<livewire:counter />

<a href="{{ route('todo.index') }}" class="mx-5 p-2 cursor-pointer rounded text-white">
    <span class="fas fa-arrow-alt-circle-left text-3xl text-blue-400 hover:text-blue-900" />
</a>
@endsection("body")