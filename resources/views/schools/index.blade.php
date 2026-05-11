<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Schule') }}
        </h2>
    </x-slot>

    <div class="py-12 space-y-6">

        <div class="flex justify-center">
            @if (session('success'))
                <div class="bg-emerald-500 border border-emerald-600 dark:bg-emerald-600 dark:border-emerald-400 text-white font-semibold px-4 py-2 rounded-md shadow-md inline-flex items-center space-x-2 animate-fade-in">
                    <!-- Icon -->
                    <svg class="w-5 h-5 flex-shrink-0" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"
                         xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"></path>
                    </svg>
                    <span>{{ session('success') }}</span>
                </div>

                <style>
                    @keyframes fade-in {
                        from { opacity: 0; transform: translateY(-5px); }
                        to { opacity: 1; transform: translateY(0); }
                    }
                    .animate-fade-in {
                        animation: fade-in 0.4s ease-out;
                    }
                </style>
            @endif
        </div>

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h1>{{ __('Select school') }}</h1>
                    <p>{{ __('Please enter the school details') }}</p>


                </div>
            </div>
        </div>

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <form action="{{ route('schools.store') }}" method="post">
                        @csrf

                        <div class="mb-4">
                            <x-input-label for="name">{{__('Name')}}</x-input-label>
                            <x-text-input value="{{ old('name','') }}" name="name" id="name" class="block mt-1 w-full" />
                        </div>

                        <div class="mb-4">
                            <x-input-label for="address">{{__('Address')}}</x-input-label>
                            <x-text-input value="{{ old('address','')}}" name="address" id="address" class="block mt-1 w-full" />
                        </div>

                        <div class="mb-4">
                            <x-input-label for="school_number">{{__('School_number')}}</x-input-label>
                            <x-text-input value="{{ old('school_number','')}}"  name="school_number" id="school_number" class="block mt-1 w-full" />
                        </div>

                        <x-primary-button class="mt-3">
                            {{ __('Save') }}
                        </x-primary-button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 text-gray-900 dark:text-gray-100">

                @foreach($schools as $school)
                    <div class="border p-3 rounded">
                        {{$school->name}}
                        <h2 class="text-2xl">{{$school->name}}</h2>
                        <p class="text-gray-500 dark:text-gray-100">{{$school->adress}}</p>
                    </div>
                @endforeach

                <div>
                    {{ $schools->links() }}
                </div>

            </div>
        </div>
    </div>

</x-app-layout>
