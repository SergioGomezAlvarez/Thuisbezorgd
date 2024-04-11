<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SGA Café</title>
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.0-alpha1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">

    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
</head>

<body class="antialiased">


    <x-app-layout>

        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight page-header-text">
                {{ __('Welcome to SGA Café!') }}
            </h2>
        </x-slot>

        <div class="main-welcome-container">
            <h1 class="welcome-text-main fade-in-text-main">A Taste of Perfection</h1>
            <h1 class="welcome-text-secondary fade-in-text-secondary">Crafted with Love, Served with joy</h1>
            <h1 class="welcome-text-bla fade-in-text-secondary">Have a glimpse inside and uncover more with just one
                click</h1>
            <div class="dashboard-button-placement fade-in-text-tertiary">
                <a href="{{ route('dashboard') }}" class="custom-button">Have a Look Around</a>
            </div>
        </div>
    </x-app-layout>
    <style>
        .sign-in-container {
            display: flex;
            flex-direction: row;
            justify-content: center;
            align-items: center;
            width: 15%;
            background-color: #F5F5DC;
        }

        .page-header-text {
            color: black;
        }

        .main-welcome-container {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: auto;
            width: 100%;
        }

        .welcome-text-main {
            padding-top: 50px;
            font-size: 4.5rem;
            font-weight: 300;
        }

        .welcome-text-secondary {
            padding-top: 20px;
            font-size: 2rem;
            font-weight: 300;
        }

        .welcome-text-bla {
            padding-top: 80px;
            font-size: 2rem;
            font-weight: 300;
        }

        .fade-in-text-main {
            animation: fadeIn 2s ease-in forwards;
            opacity: 0;
        }

        .fade-in-text-secondary {
            animation: fadeIn 2.5s ease-in forwards;
            opacity: 0;
        }

        .fade-in-text-tertiary {
            animation: fadeIn 6s ease-in forwards;
            opacity: 0;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }

        .custom-button {
            display: inline-block;
            text-align: center;
            text-decoration: none;
            border: none;
            cursor: pointer;

            padding: 15px 32px;
            border-radius: 10px;
            transition-duration: 0.4s;
            font-size: 16px;

            background-color: rgb(36, 36, 36);
            color: white;

        }

        .custom-button:hover {
            background-color: rgb(100, 100, 100);
            color: white;
        }

        .dashboard-button-placement{
            padding-top: 60px;
        }
    </style>

</body>

</html>
