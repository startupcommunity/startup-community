<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        {{-- <link href="{{asset('css/app.css')}}" rel="stylesheet"> --}}
        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    </head>
    <body class="antialiased" style="background: linear-gradient(90deg, #004E8F 15%, #2388B9 100%);overflow-x: hidden;">
        <div id="app" class="content">
              <Login> </Login>
        </div>
            
            @vite(['resources/css/app.css', 'resources/js/app.js'])
        
    </body>

</html>