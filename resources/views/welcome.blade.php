<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-black text-white font-mono">
    <nav class="border-b border-white/15 sticky">
        <div class="py-4 max-w-6xl mx-auto">
            <div class="flex justify-between">
                <div>
                    <h1 class="text-white/80 hover:text-white/90 hover:cursor-pointer">
                        {{ config('app.name', 'Laravel') }}</h1>
                </div>
                <div class="flex items-center gap-2">
                    <p class="text-white/80 hover:text-white/90 hover:cursor-pointer">Features</p>
                    <p class="text-white/80 hover:text-white/90 hover:cursor-pointer">Faq</p>
                    <p class="text-white/80 hover:text-white/90 hover:cursor-pointer">Contact</p>
                </div>
                <div>
                    <p class="text-white/80 hover:text-white/90 hover:cursor-pointer">Auth</p>
                </div>
            </div>
        </div>
    </nav>
    <div class="max-w-6xl mx-auto mt-55">
        <div class="flex flex-col gap-6">
            <h1 class="text-white max-w-sm text-3xl">Send secure and private emails with
                <span class="text-purple-500 font-semibold inline-block relative">
                    {{ config('app.name', 'Laravel') }}
                    <img src="{{ asset('storage/underline.svg') }}" class="absolute left-0 -bottom-3 w-full h-auto">
                </span>
            </h1>
            <p class="text-white/60 max-w-xl text-sm">Experience the future of email communication with our cutting-edge
                encryption technology, ensuring your messages remain confidential and protected from prying eyes.</p>
        </div>
    </div>

    <div class="max-w-6xl mx-auto mt-120 mb-20">
        <div class="flex flex-col gap-8">
            <div class="flex flex-col gap-4">
                <div class="grid grid-cols-1">
                    <div class="px-4 py-8">
                        <div class="flex flex-col gap-2">
                            <h1 class="text-text-white/90">99.9% Uptime</h1>
                            <p class="text-white/60 text-sm">Reliable and always available when you need it.</p>
                            <div class="mt-4">
                                <canvas id="uptimeChart" class="w-full h-28"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="grid md:grid-cols-2 grid-cols-1 gap-4">
                    <div
                        class="px-4 py-8 border border-white/10 bg-white/5 rounded-lg hover:bg-white/5 items-center text-center justify-center">
                        <div class="flex flex-col gap-8 text-center items-center">
                            <div class="p-4 rounded-full border border-white/10">
                                <x-heroicon-o-finger-print class="text-purple-400 size-8 hover:animate-pulse" />
                            </div>
                            <div class="flex flex-col gap-1">
                                <h2 class="text-white/90">Privacy first</h2>
                                <p class="text-white/60 text-sm">Minimize your digital footprint.</p>
                            </div>
                        </div>
                    </div>
                    <div
                        class="px-4 py-8 border border-white/10 bg-white/5 rounded-lg hover:bg-white/5 items-center text-center justify-center">
                        <div class="flex flex-col gap-8 text-center items-center">
                            <div class="p-4 rounded-full border border-white/10">
                                <x-heroicon-s-sparkles class="text-purple-400 size-8 hover:animate-pulse" />
                            </div>
                            <div class="flex flex-col gap-1">
                                <h2 class="text-white/90">Minimal design</h2>
                                <p class="text-white/60 text-sm">Sleek and modern interface to help you focus.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
