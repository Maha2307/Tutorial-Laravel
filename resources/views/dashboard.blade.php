<x-app-layout>
    <style>body {color: rgb(0, 255, 64)}</style>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-6">
                {{ __('Je bent ingelogd!') }}

                <div class="mt-4">
                    <a href="{{ url('/taken') }}" class="px-4 py-2 bg-indigo-600 text-white rounded hover:bg-indigo-700">
                        Ga naar Taken
                    </a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
