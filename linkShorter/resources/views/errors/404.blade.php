<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Get link</title>
        <link rel="stylesheet" href="../../public/build/assets/app.f5f3eb49.css"/>
        @vite(['resources/css/app.css', 'resources/js/404.js'])
    </head>
    <body>
        <form action="{{route('getLink')}}" method="Post" id="form404">
            <input name="url" class="hide" id="form_value"></input>
        </form>
    </body>
</html>
