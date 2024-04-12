<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl leading-tight menu-header-text">
            {{ __('Menu') }}
        </h2>
    </x-slot>

    <div class="menu-container-main">
        <div class="menu-section-container">
            <h1 class="menu-section-text">Luxury Meals</h1>
        </div>
        <div class="menu-item-containers-row">
            <div class="menu-item-container">
                <div class="image-container">
                    <img class="filet-mignon" src="{{ $menuItems->find(1)->image }}">
                </div>
                <div class="name-item-container">
                    <h1 class="name-text">{{ $menuItems->find(1)->title }}</h1>
                </div>
                <div class="description-item-container">
                    <h1 class="name-text">{{ $menuItems->find(1)->description }}</h1>
                </div>
                <div class="price-item-container">
                    <h1 class="name-text">${{ $menuItems->find(1)->price }}</h1>
                </div>
            </div>
            <div class="menu-item-container">
                <div class="image-container">
                    <img class="filet-mignon" src="{{ $menuItems->find(2)->image }}">
                </div>
                <div class="name-item-container">
                    <h1 class="name-text">{{ $menuItems->find(2)->title }}</h1>
                </div>
                <div class="description-item-container">
                    <h1 class="name-text">{{ $menuItems->find(2)->description }}</h1>
                </div>
                <div class="price-item-container">
                    <h1 class="name-text">${{ $menuItems->find(2)->price }}</h1>
                </div>
            </div>
            <div class="menu-item-container">
                <div class="image-container">
                    <img class="filet-mignon" src="{{ $menuItems->find(3)->image }}">
                </div>
                <div class="name-item-container">
                    <h1 class="name-text">{{ $menuItems->find(3)->title }}</h1>
                </div>
                <div class="description-item-container">
                    <h1 class="name-text">{{ $menuItems->find(3)->description }}</h1>
                </div>
                <div class="price-item-container">
                    <h1 class="name-text">${{ $menuItems->find(3)->price }}</h1>
                </div>
            </div>
            <div class="menu-item-container">
                <div class="image-container">
                    <img class="filet-mignon" src="{{ $menuItems->find(4)->image }}">
                </div>
                <div class="name-item-container">
                    <h1 class="name-text">{{ $menuItems->find(4)->title }}</h1>
                </div>
                <div class="description-item-container">
                    <h1 class="name-text">{{ $menuItems->find(4)->description }}</h1>
                </div>
                <div class="price-item-container">
                    <h1 class="name-text">${{ $menuItems->find(4)->price }}</h1>
                </div>
            </div>

        </div>
        <div class="menu-section-container">
            <h1 class="menu-section-text">Sushi</h1>
        </div>
        <div class="menu-item-containers-row">
            <div class="menu-item-container">
                <div class="image-container">
                    <img class="filet-mignon" src="{{ $menuItems->find(5)->image }}">
                </div>
                <div class="name-item-container">
                    <h1 class="name-text">{{ $menuItems->find(5)->title }}</h1>
                </div>
                <div class="description-item-container">
                    <h1 class="name-text">{{ $menuItems->find(5)->description }}</h1>
                </div>
                <div class="price-item-container">
                    <h1 class="name-text">${{ $menuItems->find(5)->price }}</h1>
                </div>
            </div>
            <div class="menu-item-container">
                <div class="image-container">
                    <img class="filet-mignon" src="{{ $menuItems->find(6)->image }}">
                </div>
                <div class="name-item-container">
                    <h1 class="name-text">{{ $menuItems->find(6)->title }}</h1>
                </div>
                <div class="description-item-container">
                    <h1 class="name-text">{{ $menuItems->find(6)->description }}</h1>
                </div>
                <div class="price-item-container">
                    <h1 class="name-text">${{ $menuItems->find(6)->price }}</h1>
                </div>
            </div>
            <div class="menu-item-container">
                <div class="image-container">
                    <img class="filet-mignon" src="{{ $menuItems->find(7)->image }}">
                </div>
                <div class="name-item-container">
                    <h1 class="name-text">{{ $menuItems->find(7)->title }}</h1>
                </div>
                <div class="description-item-container">
                    <h1 class="name-text">{{ $menuItems->find(7)->description }}</h1>
                </div>
                <div class="price-item-container">
                    <h1 class="name-text">${{ $menuItems->find(7)->price }}</h1>
                </div>
            </div>
            <div class="menu-item-container">
                <div class="image-container">
                    <img class="filet-mignon" src="{{ $menuItems->find(8)->image }}">
                </div>
                <div class="name-item-container">
                    <h1 class="name-text">{{ $menuItems->find(8)->title }}</h1>
                </div>
                <div class="description-item-container">
                    <h1 class="name-text">{{ $menuItems->find(8)->description }}</h1>
                </div>
                <div class="price-item-container">
                    <h1 class="name-text">${{ $menuItems->find(8)->price }}</h1>
                </div>
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
            align-items: center;

            width: 100%;
            height: auto;

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

            background-color: #dedeb4;
        }

        .image-container {
            display: flex;
            justify-content: center;
            height: 50%;
            width: 100%;
            background-color: #dedeb4;
        }

        .name-item-container {
            display: flex;
            flex-direction: row;
            justify-content: center;
            align-items: center;

            width: 100%;
            height: 12.5%;


        }

        .description-item-container {
            display: flex;
            flex-direction: row;
            justify-content: center;
            align-items: center;

            width: 100%;
            height: 25%;


        }

        .price-item-container {
            display: flex;
            flex-direction: row;
            justify-content: center;
            align-items: center;

            width: 100%;
            height: 12.5%;


        }

        .menu-section-container {
            display: flex;
            justify-content: center;
            align-items: center;

            width: 100%;
            height: 50px;

        }

        .menu-section-text {
            font-size: 2.4rem;
        }

        .filet-mignon {
            width: 70%;
        }
    </style>
</x-app-layout>
