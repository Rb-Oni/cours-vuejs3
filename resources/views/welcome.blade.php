<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @vite('resources/css/app.css')
    <title>VueJS 3</title>
</head>

<body class="antialiased">
    <div id="app">
        <h1 class="text-red-500">test</h1>
    </div>
    @vite('resources/js/app.js')
</body>

</html>