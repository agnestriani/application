<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>{{ $title }}</title>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Balsamiq+Sans&family=Poppins:wght@200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    </head>
    <body class="bg-slate-200 flex min-h-screen">
        <x-sidebar></x-sidebar>

        <div class="flex-1 p-4 overflow-auto">
            <x-header>{{ $title }}</x-header>

            <main >
                {{ $slot }}
            </main>
        </div>
    </body>
</html>