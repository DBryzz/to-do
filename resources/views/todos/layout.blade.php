<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- <link href="{{ asset('css/fontawesome.css') }}" rel="stylesheet"> -->

    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

    <title>Todos | @yield("title")</title>
</head>

<body>
    <div class="text-center justify-center flex pt-10 ">
        <div class="w-3/5 border border-gray-300 rounded p-4 ">
            <div class="flex justify-between flex-row border-b pb-4 px-4">
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