<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Schule') }}
        </h2>
    </x-slot>

    <div class="py-12 space-y-6">

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">

                    <h1 class="text-2xl">{{ __('Schule eingeben') }}</h1>
                    <p>{{ __('Bitte geben Sie einen Schulnamen ein') }}</p>

                </div>
            </div>
        </div>

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">

                    <form action="{{ route('schule.enter') }}" method="POST">
                        @csrf

                        <div>
                            <x-input-label for="schoolname">Schulname</x-input-label>
                            <x-text-input name="schoolname" id="schoolname" class="block mt-1 w-full" />
                        </div>

                        <x-primary-button class="mt-3">
                            {{ __('Speichern') }}
                        </x-primary-button>
                    </form>

                </div>
            </div>
        </div>

    </div>
</x-app-layout>
