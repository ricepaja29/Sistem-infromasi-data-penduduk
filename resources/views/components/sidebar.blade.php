<aside 
    class="sticky top-0 bg-white border-r h-screen transition-all duration-300" 
    :class="isSidebarOpen ? 'w-60' : 'w-20'" 
    x-transition:enter.delay.3000ms
>
    <div class="h-full flex flex-col">
        <!-- Toggle Button -->
        <div class="h-20 w-full border-b border-slate-300 flex items-center justify-center p-4">
            <x-forkawesome-user-secret class="w-8 h-8 text-blue-500 flex-none" />
        </div>

        <!-- Sidebar Content -->
        <div 
            class="h-[calc(100%-80px)] flex flex-col p-2" 
            :class="isSidebarOpen ? 'items-start' : 'items-center'"
        >
            <a 
                href="/dashboard" 
                :class="isSidebarOpen ? 'w-full' : 'justify-center'" 
                class="{{ request()->is('dashboard') ? 'bg-blue-100 text-blue-700' : 'text-gray-500' }} mb-2 hover:text-gray-700 hover:bg-blue-200/50 p-2 rounded flex gap-x-2 items-center"
            >
                <x-eva-grid class="w-7 h-7 {{ request()->is('dashboard') ? 'text-blue-700' : 'text-blue-500' }} flex-none" /> 
                <p 
                    x-show="isSidebarOpen" 
                    x-transition:enter.delay.300ms 
                    class="ml-1 font-bold"
                > 
                    Dashboard 
                </p>
            </a>

            <a 
                href="/add-data-penduduk" 
                :class="isSidebarOpen ? 'w-full' : 'justify-center'" 
                class="{{ request()->is('add-data-penduduk') ? 'bg-blue-100 text-blue-700' : 'text-gray-500' }} mb-2 hover:text-gray-700 hover:bg-blue-200/50 p-2 rounded flex gap-x-2 items-center"
            >
                <x-iconpark-add class="w-7 h-7 {{ request()->is('add-data-penduduk') ? 'text-blue-700' : 'text-blue-500' }} flex-none" /> 
                <p 
                    x-show="isSidebarOpen" 
                    x-transition:enter.delay.300ms 
                    class="ml-1 font-bold"
                > 
                    Tambah Data 
                </p>
            </a>
        </div>
    </div>
</aside>