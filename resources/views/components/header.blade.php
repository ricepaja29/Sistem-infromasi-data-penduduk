<header class="h-20 border-b sticky top-0 left-0 bg-white border-slate-300">
    <div class="flex h-full items-center justify-between px-5">
        <div class="flex items-center justify-center gap-x-3">
            <button @click="isSidebarOpen = !isSidebarOpen" class="text-gray-700 p-2 rounded hover:bg-gray-100">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                    stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
            </button>
            <h1 class="text-center text-xl font-semibold text-blue-500">{{ $slot }}</h1>
        </div>
        <div class="">
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <a href="{{ route('logout') }}"
                    class="block rounded shadow py-1 px-3 text-white bg-blue-500 hover:bg-blue-400 active:bg-blue-500 transition-transform duration-500"
                    onclick="event.preventDefault();this.closest('form').submit();">Logout</a>
            </form>
        </div>
    </div>
</header>
