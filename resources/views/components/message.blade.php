@if(session('success'))
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 text-gray-900 dark:text-emerald-600">

                <p>{{session('success')}}</p>
            </div>
        </div>
    </div>
@elseif($errors->any())
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 text-gray-900 dark:text-red-700">

                <p>{{__('Error occured')}}</p>

            </div>
        </div>
    </div>

@endif
