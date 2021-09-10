@extends("todos.layout")

<title>@section("title", "Todos")</title>
@section("body-h1", "All Your Todos")

@section("button")
<!-- <a href="{{  route('todo.create') }}" class="mx-5 py-1 px-1 bg-gradient-to-r from-green-400 to-blue-500 hover:from-pink-500 hover:to-yellow-500 cursor-pointer rounded text-white">
    New Todo
</a> -->
<a href="{{  route('todo.create') }}" class="mx-5 py-2 cursor-pointer text-white">
    <span class="fas fa-plus-circle text-xl text-blue-400 hover:text-blue-900" />
</a>
@endsection("button")
@section("body")
<ul>
    @forelse($todos as $todo)
    <li class="flex justify-between py-2">
        <div>
            @include("todos.partials.complete-button")
        </div>
        <div>
            @if($todo->completed)
            <a href="{{ route('todo.show', $todo->id) }}" class="cursor-pointer">
                <p class="line-through">{{ $todo->title }}</p>
            </a>
            @else
            <a href="{{ route('todo.show', $todo->id) }}" class="cursor-pointer">
                <p class="">{{ $todo->title }}</p>
            </a>
            @endif
        </div>


        <div>
            <a href="{{ route('todo.edit', $todo->id) }}" class="mx-5 py-1 px-1 text-yellow-300 cursor-pointer ">
                <span class="fas fa-pen px-2" />
            </a>
            <i onclick="event.preventDefault(); 
            if(confirm('Are you sure you want to delete?')) {
                document.getElementById('form-delete-{{$todo->id}}')
                .submit(); 
                console.log('deleted ?');
            }" class="fas fa-times px-2 mx-5 py-1  text-red-300 cursor-pointer"></i>

            <form style="display:none" id="{{'form-delete-'.$todo->id}}" method="post" action="{{ route('todo.destroy', $todo->id) }}">
                @csrf
                @method('delete')
            </form>
        </div>
    </li>
    @empty
    <p>No tasks available, please create one</p>

    @endforelse



</ul>
@endsection("body")