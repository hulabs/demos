<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Blog</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
    </style>
    <link rel="stylesheet" href="{{asset('build/assets/app-70f11624.css')}}" />
</head>
<body class="bg-gray-100 min-h-screen flex flex-col">
<x-layouts.header />
<main class="flex flex-1 container max-w-7xl mx-auto px-5 lg:px-40 space-x-5 mb-5">
    {{ $slot }}
    {{-- 2. Spalte ----------------------------------------------------------------------------------}}
    <div class="space-y-5" style="width:300px;">

        <div class="bg-blue-700 shadow rounded-sm">
            <h2 class="text-white text-2xl p-5">Newsletter</h2>
            <div class="border-t border-blue-600 text-white p-5 text-sm">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum laboriosam omnis repudiandae unde.
                <div class="flex mt-5">
                    <input type="text" name="newsletter" class="rounded-l-sm text-gray-800 px-4 py-2 h-12"
                           placeholder="E-Mail Adresse" style="min-width: 0px;">
                    <button type="button" class="bg-blue-800 h-12 text-xs px-4 py-2 rounded-r-sm">abonnieren</button>
                </div>
            </div>
        </div>

        <x-post.newest />

        <x-post.categories />

        <x-post.trending />

    </div>
</main>
<x-layouts.footer />
<script src="{{asset('build/assets/app-e40cc302.js')}}" type="text/javascript"></script>
</body>
</html>
