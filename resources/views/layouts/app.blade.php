<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased">
    <div class="min-h-screen container-main">
        @include('layouts.navigation')

        <!-- Page Heading -->
        @if (isset($header))
            <header class="shadow header-page">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8 header-page">
                    {{ $header }}
                </div>
            </header>
        @endif

        <!-- Page Content -->
        <main>
            {{ $slot }}
        </main>
        <style>
            .container-main {
                background-color: #F19143;
            }

            .header-page {
                background-color: #F19143;
            }
        </style>
    </div>
</body>

</html>
