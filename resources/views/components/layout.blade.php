<!DOCTYPE html>
<html lang="en" x-data="{ isSidebarOpen: false }">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @notifyCss
</head>

<body class="bg-slate-100">
    <div class="flex relative w-full min-h-screen h-screen">
        <!-- Sidebar -->
        <x-sidebar />

        <!-- Main Content -->
        <div class="w-full overflow-y-scroll">
            <x-header>{{ $title }}</x-header>
            <main class="p-5 h-full">
                <div>
                    {{ $slot }}
                </div>
            </main>
            <footer class="h-16 border-y bg-white flex items-center justify-center">
                <p>Made With ❤️</p>
            </footer>
        </div>
    </div>
    <x-notify::notify />
    @notifyJs
</body>

</html>
