<a {{ $attributes->merge(['class' => 'block w-full px-4 py-2 text-start text-sm leading-5 hover:bg-gray-100 focus:outline-none transition duration-150 ease-in-out dropdown-buttons']) }}>{{ $slot }}</a>

<style>
    .dropdown-buttons{
        color: black;
    }

    .dropdown-buttons:hover{
        color: black;
    }
</style>
