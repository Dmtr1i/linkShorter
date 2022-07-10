<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Redirect</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <div class="mainDiv">
        <h1 class="title">redirect to the specified link</h1>
    </div>
    @if($short_link)
        <div class="hide" id="resultLink">{{ $short_link->value("old_link") }}</div>
    @endif
    <script>document.location.href = document.getElementById('resultLink').textContent;</script>
</body>
</html>