<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Todos | @yield("title")</title>
</head>

<body>
    <div class="text-center flex justify-center pt-10">
        <div class="w-1/3  border border-gray-600 rounded p-4">
            <div class="flex flex-row">
                <h1 class="text-2xl">@yield("body-h1")</h1>

                @yield("button")
            </div>

            <x-alert></x-alert>
            @yield("body")
        </div>
    </div>

</body>

</html>