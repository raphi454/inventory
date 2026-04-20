<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Rooms') }}
        </h2>
    </x-slot>

    <div class="py-12 space-y-6">

        @if(session('success'))
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 text-emerald-600">
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6">

                        <p>{{session('success')}}</p>

                    </div>
                </div>
            </div>
        @endif

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h1>{{ __('edit Room') }}</h1>
                    <p>{{ __('please edit your room') }}</p>


                </div>
            </div>
        </div>

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">

                    <form action="{{ route('room.store') }}" method="post" class="space-y-6">
                        @csrf

                        <div class="mb-4">
                            <x-input-label for="title">Raumtitel</x-input-label>
                            <x-text-input value="{{ old('title','') }}" name="title" id="title" class="block mt-1 w-full" />
                        </div>
                        <!--
                        <div class="mb-4">
                            <x-input-label for="school_id">{{__('School id')}}</x-input-label>
                            <x-text-input value="{{old('school_id','')}}" name="school_id" id="plz" class="block mt-1 w-full" />
                        </div>
                        -->

                        <div class="text-black">
                            <x-input-label for="school_id">{{__('School')}}</x-input-label>
                            <select id="school_id" name="school_id" class="rounded">
                                @foreach($schools as $school)
                                    <option value="{{$school->id}}" @selected(old("school_id", '101') == $school->id)>
                                        {{$school->name}}</option>
                                @endforeach
                            </select>
                        </div>

                        <x-primary-button class="mt-3">
                            {{ __('Save') }}
                        </x-primary-button>
                    </form>
                </div>
            </div>
        </div>


        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100 space-y-6">

                    @foreach($rooms as $room)
                        <div class="border p-3 rounded-lg flex justify-between">
                            <h2 class="font-extrabold text-xl">{{$room->title}}</h2>
                            <p class="text-gray-500 dark:text-gray-100">Schule: {{$room->school_id}}</p>

                            <div>
                                <a href="{{route('rooms.edit', $room->id)}}">
                                    <x-pencil class="text-indigo-600" />
                                    <span class="sr-only">{{__('Edit room')}}</span>
                                </a>
                            </div>
                            <form action="{{route('rooms.destroy', $room->id)}}" method="post">

                                @csrf
                                @method('DELETE')
                                <button>
                                    <x-trash class="text-red-500"/>
                                    <span class="sr-only">{{ __('Remove room') }}</span>
                                </button>

                            </form>

                        </div>
                    @endforeach

                    <div>
                        {{$rooms->links()}}
                    </div>
                </div>
            </div>
        </div>
</x-app-layout>


