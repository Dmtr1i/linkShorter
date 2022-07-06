<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Link shorter</title>
        <link rel="stylesheet" href="../../public/build/assets/app.f5f3eb49.css"/>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body>
        <div class="mainDiv">
            <h1 class="title">Link shorter</h1>
            <form name="link">
                <input id="inputLink" class="inputLink" placeholder="your link" type="text"/>
            </form>
            <button id="submitButton" class="submitButton">submit</button>
            <div class="resultLink" id="resultLink"></div>
        </div>
    </body>
</html>
