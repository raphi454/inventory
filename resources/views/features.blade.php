<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @else
        <style>/* tailwind fallback ... */</style>
    @endif
</head>

<body class="bg-gray-100 dark:bg-gray-500 p-3">

<h1 class="text-sm md:text-xl lg:text-4xl text-gray-500 dark:text-amber-500 md:text-amber-300 dark:md:text-red-300">
    Inventarsystem – Übersicht
</h1>

<img
    src="{{ asset('images/inv.png') }}"
    alt="Inventarsystem Illustration"
    class="mt-6 mb-6 md:mt-9 rounded-lg"
/>

<p class="text-lg lg:text-3xl mt-6 mb-6 md:mt-9 text-gray-500 dark:text-amber-500">
    Unser Inventar besteht aus Items, die einem Raum und einer Schule zugeordnet sind. Zusätzlich gibt es Kategorien pro Schule.
</p>

<div class="space-y-3">
    <p class="bg-pink-400 dark:bg-blue-700 p-3 rounded-lg">
        <strong>items</strong> (Inventargegenstände): id, ts, invnumber, room_id, school_id, title, comment
    </p>

    <p class="bg-blue-700 dark:bg-pink-400 p-3 rounded-lg">
        <strong>rooms</strong> (Räume): id, title, school_id
    </p>

    <p class="bg-emerald-600 dark:bg-teal-500 p-3 rounded-lg">
        <strong>schools</strong> (Schulen): id, title, address
    </p>

    <div class="mt-6 flex flex-col md:flex-row space-y-3 md:space-y-0">
        <div class="bg-amber-400 dark:bg-emerald-600 flex-2 rounded-lg p-3">
            <p><strong>categories</strong> (Kategorien): id, title, school_id</p>
        </div>

        <div class="bg-teal-500 dark:bg-amber-400 flex-1 rounded-lg p-3">
            <p><strong>Zuordnung:</strong> Item → Room → School</p>
        </div>
    </div>
</div>

</body>
</html>
