<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="/css/app.css">
        <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
        <title>Shoe Tracker</title>
    </head>
    <body>
        <div class="container">
            <div class="header">
                <a href="/"><h2>Shoe Tracker</h2></a>
                <a href="/create"><img id="add-icon" src="{{asset('img/circle-plus-solid.svg')}}" alt=""></a>
            </div>
            
            @if(session()->has('message'))
                <div x-data="{ show:true }"
                    x-init="setTimeout(() => show = false, 4000)"
                    x-show="show"
                    class="message-card">
                    {{session('message')}}
                </div>
            @endif

            {{ $slot }}

        </div>
    </body>
</html>