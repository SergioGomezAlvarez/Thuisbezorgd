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
    <body class="font-sans text-gray-900 antialiased">
        <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 login-container-main">
            <div>
                <a class="logo-login-container" href="/">
                    <img class="logo-sga-login" src="./images/serg-logo-1.png">
                </a>
            </div>

            <style>
                .logo-sga-login{
                    width: 10%;
                }

                .logo-login-container{
                    display: flex;
                    flex-direction: row;
                    justify-content: center;
                }

                .login-container-main{
                    background-color: #F5F5DC;
                }

                .login-form-container{
                    background-color: rgb(36, 36, 36);
                }
            </style>

            <div class="w-full sm:max-w-md mt-6 px-6 py-4 shadow-md overflow-hidden sm:rounded-lg login-form-container">
                {{ $slot }}
            </div>
        </div>
    </body>
</html>
