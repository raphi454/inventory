<nav class="text-sm text-gray-500 mb-4">
    <ol class="flex items-center space-x-2">

        <li>
            <a href="{{ route('dashboard') }}"
               class="hover:text-blue-600">
                Dashboard
            </a>
        </li>

        @if(request()->routeIs('schools.*'))
            <li>/</li>
            <li class="font-semibold text-gray-700">
                Schools
            </li>
        @endif

        @if(request()->routeIs('rooms.index'))
            <li>/</li>
            <li class="font-semibold text-gray-700">
                Rooms
            </li>
        @endif

        @if(request()->routeIs('rooms.edit'))
            <li>/</li>
            <a href="{{ route('rooms.index') }}">
                Rooms
            </a>

            <li>/</li>
            <li class="font-semibold text-gray-700">
                Edit Room
            </li>
        @endif

        @if(request()->routeIs('student'))
            <li>/</li>
            <li class="font-semibold text-gray-700">
                Student
            </li>
        @endif

    </ol>
</nav>

