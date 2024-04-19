<!-- resources/views/contact.blade.php -->

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl leading-tight">
            {{ __('Contact Us') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <p>Contactgegevens:</p>
                    <ul>
                        <li>Adres: 98 Heyendaalseweg, Nijmegen, 6525 EE</li>
                        <li>Telefoon: 123-456-7890</li>
                        <li>Email: info@sgacafe.com</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
