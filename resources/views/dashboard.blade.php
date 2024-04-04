<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl leading-tight menu-header-text">
            {{ __('Menu') }}
        </h2>
    </x-slot>

    <div class="menu-container-main">
    </div>

    <style>
        .menu-header-text {
            color: black;
        }

        .menu-container-main{
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;

            width: 100%;
            height: auto;

            background-color: red;
        }
    </style>
</x-app-layout>
