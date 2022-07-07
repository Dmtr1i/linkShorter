<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Redirect</title>
    @vite(['resources/css/app.css', 'resources/js/redirect.js'])
</head>
<body>
    @if($short_link)
        <div class="hide" id="resultLink">{{ $short_link->value("old_link") }}</div>
    @endif
</body>
</html>