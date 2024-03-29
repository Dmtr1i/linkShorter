<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Redirect</title>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body>
        <div class="mainDiv">
            <h1 class="title">redirect to the specified link</h1>
        </div>
        <form action="{{route('getLink')}}" method="Post" id="form404">
            @csrf
            <input name="url" class="hide" id="form_value"></input>
        </form>
        <script>
            document.getElementById('form_value').value = document.URL;
            document.getElementById('form404').submit();
        </script>
    </body>
</html>
