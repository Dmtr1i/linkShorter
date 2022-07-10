<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Link shortener</title>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body>
        <div class="mainDiv">
            <form action="{{ route('short') }}"method="Post">
                @csrf
                <h1 class="title">Link shortener</h1>
                <input name="userLink" id="inputLink" class="inputLink" placeholder="your link" type="text"/>
                @error("userLink")
                <p class="error">{{ $message }}</p>
                @enderror
                <button id="submitButton" class="submitButton" type="submit">submit</button>
            </form>
            @if($short_link)
                <div class="resultLink" id="resultLink">Your link is {{ $short_link }}</div>
                <button class="submitButton" id="copyLink">Copy link</button>
            @endif
        </div>
    </body>
</html>
