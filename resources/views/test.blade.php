<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <x-alert value="new image add successfully" type="success" dismissible id="my-alert" role="flash"
            class="mt-4 " >
            <x-slot:title >
                {{$component->icon()}}
                Success
            </x-slot>
            <p class="mb-0 text-danger">Data has been removed. {{$component->link('Undo')}}</p>
        </x-alert>
       
       
       {{-- @php
            $logo = 'logo.svg';
        @endphp
        <x-icon :src="$logo" />
        <x-Ui.button /> --}}

        <x-form action="/images" method="POST">
            <input type="text" name="name">
            <button type="submit">Submit</button>
        </x-form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>
</body>

</html>
