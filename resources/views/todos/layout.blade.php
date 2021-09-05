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
    <div class="text-center justify-center flex pt-10 ">
        <div class="w-2/7 border border-gray-300 rounded p-4 ">
            <div class="flex flex-row border-b pb-4">
                <h1 class="text-2xl">@yield("body-h1")</h1>

                @yield("button")
            </div>

            <x-alert></x-alert>
            <div class="py-4">
                @yield("body")

            </div>
        </div>
    </div>

</body>

</html>