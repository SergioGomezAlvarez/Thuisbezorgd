<!-- resources/views/menu/edit.blade.php -->

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl leading-tight menu-header-text">
            {{ __('Edit Menu Item') }}
        </h2>
    </x-slot>

    <div class="menu-container-main">
        <div class="menu-form-container">
            <form action="{{ route('menu.edit', ['menuItem' => $menuItem->id]) }}" method="GET" enctype="multipart/form-data">

                <div class="form-group">
                    <label for="title" class="form-label">Title</label>
                    <input type="text" name="title" id="title" class="form-control" value="{{ $menuItem->title }}" required>
                </div>

                <div class="form-group">
                    <label for="description" class="form-label">Description</label>
                    <textarea name="description" id="description" class="form-control" required>{{ $menuItem->description }}</textarea>
                </div>

                <div class="form-group">
                    <label for="price" class="form-label">Price</label>
                    <input type="number" name="price" id="price" class="form-control" value="{{ $menuItem->price }}" required>
                </div>

                <div class="form-group">
                    <label for="image" class="form-label">Image</label>
                    <input type="file" name="image" id="image" class="form-control" accept="image/*">
                    <img src="{{ asset($menuItem->image) }}" alt="Menu Item Image" style="max-width: 200px; margin-top: 10px;">
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Update Menu Item</button>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>
