@extends("todos.layout")

<title>@section("title", "Create")</title>
@section("body-h1", "{{ $todo->title }}")
@section("button")
<a href="{{  route('todo.index') }}" class="mx-5 py-2 cursor-pointer text-white">
    <span class="fas fa-arrow-alt-circle-left text-xl text-blue-400 hover:text-blue-900" />
</a>
@endsection("button")

@section("body")
<div>
    <h3 class="text-lg font-bold">Description</h3>
    <p class="text-lg">{{ $todo->description }}</p>
</div>

@if ($todo->steps->count()>0)
<div class="p-4">
    <h3 class="text-lg font-bold">Steps for this task</h3>
    <div class="flex justify-center">
        <ul class=" list-disc text-left">
            @foreach ($todo->steps as $step)
            <li class="">{{ $step->name }}</li>
            @endforeach
        </ul>
    </div>


</div>
@endif

<!-- text-center justify-center flex pt-10 ">
<div class="w-3/5 border border-gray-300 rounded p-4  -->

@endsection(" body")