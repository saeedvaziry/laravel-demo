<html>
    <head>
        <title>{{ config('app.name') }}</title>
        @vite(['resources/js/app.js', 'resources/css/app.css'])
        @livewireStyles
    </head>
    <body class="bg-[#0E0500] flex items-center justify-center h-screen overflow-hidden">
        <div class="flex flex-col gap-6">
            <h1 class="text-7xl text-[#F95E08] font-mono">Laravel</h1>
            <livewire:emojies />
        </div>
        @livewireScripts
    </body>
</html>
