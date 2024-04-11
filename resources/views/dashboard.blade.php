<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl leading-tight menu-header-text">
            {{ __('Menu') }}
        </h2>
    </x-slot>

    <div class="menu-container-main">
        <div class="menu-item-containers-row">
            <div class="menu-item-container">
                <div class="image-container">
                    <!-- Voeg hier de afbeelding toe voor het eerste gerecht -->
                </div>
                <div class="name-item-container">
                    <h1 class="name-text">{{ $menuItems->find(1)->title }}</h1>
                </div>
                <div class="description-item-container">
                    <h1 class="name-text">{{ $menuItems->find(1)->description }}</h1>
                </div>
                <div class="price-item-container">
                    <h1 class="name-text">{{ $menuItems->find(1)->price }}</h1>
                </div>
            </div>
            <div class="menu-item-container">
                <div class="image-container">
                    <!-- Voeg hier de afbeelding toe voor het tweede gerecht -->
                </div>
                <div class="name-item-container">
                    <h1 class="name-text">{{ $menuItems->find(2)->title }}</h1>
                </div>
                <div class="description-item-container">
                    <h1 class="name-text">{{ $menuItems->find(2)->description }}</h1>
                </div>
                <div class="price-item-container">
                    <h1 class="name-text">{{ $menuItems->find(2)->price }}</h1>
                </div>
            </div>
            <div class="menu-item-container">

            </div>
            <div class="menu-item-container">

            </div>

        </div>

    </div>

    <style>
        .menu-header-text {
            color: black;
        }

        .menu-container-main {
            display: flex;
            flex-direction: column;
            /* justify-content: center; */
            align-items: center;

            width: 100%;
            height: 100vh;

            background-color: #F5F5DC;
        }

        .menu-item-containers-row {
            display: flex;
            flex-direction: row;
            justify-content: space-around;
            align-items: center;

            width: 100%;
            height: 400px;

        }

        .menu-item-container {
            display: flex;
            flex-direction: column;
            align-items: center;
            width: 15%;
            height: 300px;

            background-color: red;
        }

        .image-container {
            display: flex;
            justify-content: center;
            height: 50%;
            width: 100%;
            background-color: blue;
        }

        .name-item-container{
            display: flex;
            flex-direction: row;
            justify-content: center;
            align-items: center;

            width: 100%;
            height: 12.5%;


        }

        .description-item-container{
            display: flex;
            flex-direction: row;
            justify-content: center;
            align-items: center;

            width: 100%;
            height: 25%;


        }

        .price-item-container{
            display: flex;
            flex-direction: row;
            justify-content: center;
            align-items: center;

            width: 100%;
            height: 12.5%;


        }
    </style>
</x-app-layout>
