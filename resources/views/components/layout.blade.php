@props([
    'title' => 'My Website',
])

<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }}</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="mx-auto max-w-xl bg-gray-700 p-6">
    <main>
        {{ $slot }}
    </main>
</body>

</html>
