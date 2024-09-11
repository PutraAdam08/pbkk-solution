<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>{{ $title }}</title>
</head>
<body class="bg-gradient-to-r from-violet-700 to-indigo-950">
        <x-navbar></x-navbar>
        {{ $slot }}
        
</body>
</html>