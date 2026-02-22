@props([
    'title' => 'My Website',
])

    <!doctype html>
<html lang="en" data-theme="synthwave">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body class="text-primary">
<x-nav/>
<main class="mx-auto mt-6 max-w-3xl">
    {{ $slot }}
</main>
</body>

</html>
