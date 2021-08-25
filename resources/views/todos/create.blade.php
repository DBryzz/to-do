<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Todos</title>
</head>

<body>
    <div class="text-center pt-10">
        <h1 class="text-2xl">What do you need To-Do</h1>
        <x-alert></x-alert>
        <form action="/todos/create" method="post" class="py-5">
            @csrf
            <input type="text" name="title" class="py-2 px-2 border rounded" />
            <input type="submit" value="create" class="p-2 border rounded" />
        </form>
    </div>

</body>

</html>