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
        <div class="add-button-container">
            <a href="{{ route('menu.create') }}" class="add-button">Add New Menu Item</a>
        </div>
        <div class="menu-item-containers-row">
            @foreach (\App\Models\MenuItem::all() as $menuItem)
                <div class="menu-item-container">
                    <div class="image-container">
                        <img class="filet-mignon" src="{{ $menuItem->image }}">
                    </div>
                    <div class="name-item-container">
                        <h1 class="name-text">{{ $menuItem->title }}</h1>
                    </div>
                    <div class="description-item-container">
                        <h1 class="name-text">{{ $menuItem->description }}</h1>
                    </div>
                    <div class="price-item-container">
                        <h1 class="name-text">${{ $menuItem->price }}</h1>
                    </div>
                    <div class="edit-button-container">
                        <a href="{{ route('menu.edit', ['menuItem' => $menuItem->id]) }}" class="edit-button">Edit</a>
                    </div>
                    <div class="delete-button-container">
                        <form action="{{ route('menu.delete', ['menuItem' => $menuItem->id]) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="delete-button">Delete</button>
                        </form>
                    </div>
                </div>
            @endforeach
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
            height: 1200px;

            background-color: #F5F5DC;
        }

        .menu-item-containers-row {
            display: flex;
            flex-wrap: wrap;

            flex-direction: row;
            justify-content: space-between;
            align-items: center;

            width: 100%;
            height: 400px;

        }

        .menu-item-container {
            display: flex;
            flex-direction: column;
            align-items: center;
            width: calc(25% - 20px);
            height: 400px;
            margin-bottom: 20px;
            position: relative;

            background-color: #dedeb4;
        }

        .edit-button-container {
            position: absolute;
            top: 10px;
            right: 10px;
        }

        .edit-button {
            padding: 5px 10px;
            background-color: rgb(36, 36, 36);
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            text-decoration: none;
        }

        .edit-button:hover {
            background-color: rgb(100, 100, 100);

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

        .add-button-container {
            display: flex;
            justify-content: center;
            margin-top: 20px;
            padding-bottom: 20px;
        }

        .add-button {
            padding: 10px 20px;
            background-color: rgb(36, 36, 36);
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            font-size: 16px;
            transition: background-color 0.3s ease;
        }

        .add-button:hover {
            background-color: rgb(100, 100, 100);
        }
    </style>
</x-app-layout>
