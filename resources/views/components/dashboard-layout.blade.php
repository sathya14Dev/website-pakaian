@php
    $masterDataActive = request()->is('admin/category') || request()->is('admin/product');
@endphp

<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.0/css/all.min.css">
    @vite('resources/css/app.css')
    <style>
        .sidebar-gradient {
            background: linear-gradient(135deg, #064e3b 0%, #065f46 50%, #047857 100%);
        }
        .nav-active {
            background: linear-gradient(135deg, #10b981 0%, #059669 100%);
            box-shadow: 0 4px 15px rgba(16, 185, 129, 0.4);
        }
        .nav-hover:hover {
            background: rgba(16, 185, 129, 0.1);
            transform: translateX(4px);
        }
    </style>
</head>

<body class="bg-gray-50">
    <!-- Sidebar -->
    <aside class="w-80 h-screen overflow-y-auto fixed left-0 top-0 sidebar-gradient z-50 shadow-2xl" id="sidebar">
        <div class="px-6 py-8 min-h-screen flex flex-col">
            <!-- Logo Section -->
            <div class="text-center mb-8">
                <div class="w-20 h-20 bg-white rounded-2xl mx-auto mb-4 flex items-center justify-center shadow-lg">
                    <img src="{{ asset('logo.png') }}" alt="Logo" class="w-16 h-16 object-contain">
                </div>
                <h2 class="text-white font-bold text-xl">Admin Panel</h2>
                <p class="text-emerald-200 text-sm mt-1">Trisna Collection</p>
            </div>
    
            <!-- Navigation Menu -->
            <div class="space-y-2">
                <!-- Dashboard -->
                <a href="/admin/dashboard" class="flex items-center gap-4 px-4 py-3 rounded-xl transition-all duration-300 {{ request()->is('admin/dashboard') ? 'nav-active text-white' : 'text-emerald-100 nav-hover' }}">
                    <div class="w-10 h-10 flex items-center justify-center rounded-lg {{ request()->is('admin/dashboard') ? 'bg-white/20' : 'bg-emerald-800/50' }}">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"/>
                        </svg>
                    </div>
                    <div>
                        <p class="font-semibold">Dashboard</p>
                        <p class="text-xs opacity-75">Overview & Stats</p>
                    </div>
                </a>
    
                <!-- Master Data Section -->
                <div class="space-y-1">
                    <button onclick="toggleMasterData()" class="w-full flex items-center gap-4 px-4 py-3 rounded-xl transition-all duration-300 {{ $masterDataActive ? 'nav-active text-white' : 'text-emerald-100 nav-hover' }}">
                        <div class="w-10 h-10 flex items-center justify-center rounded-lg {{ $masterDataActive ? 'bg-white/20' : 'bg-emerald-800/50' }}">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"/>
                            </svg>
                        </div>
                        <div class="flex-1 text-left">
                            <p class="font-semibold">Master Data</p>
                            <p class="text-xs opacity-75">Manage Products & Categories</p>
                        </div>
                        <svg id="masterDataIcon" class="w-4 h-4 transition-transform duration-300 {{ $masterDataActive ? 'rotate-180' : '' }}" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                        </svg>
                    </button>
    
                    <div id="masterDataMenu" class="{{ $masterDataActive ? 'block' : 'hidden' }} ml-6 space-y-1">
                        <a href="/admin/category" class="flex items-center gap-3 px-4 py-2 rounded-lg transition-all duration-300 {{ request()->is('admin/category') ? 'bg-emerald-500/30 text-white border-l-4 border-emerald-300' : 'text-emerald-200 hover:bg-emerald-800/30 hover:text-white' }}">
                            <div class="w-2 h-2 rounded-full {{ request()->is('admin/category') ? 'bg-emerald-300' : 'bg-emerald-600' }}"></div>
                            <span class="text-sm font-medium">Categories</span>
                        </a>
                        <a href="/admin/product" class="flex items-center gap-3 px-4 py-2 rounded-lg transition-all duration-300 {{ request()->is('admin/product') ? 'bg-emerald-500/30 text-white border-l-4 border-emerald-300' : 'text-emerald-200 hover:bg-emerald-800/30 hover:text-white' }}">
                            <div class="w-2 h-2 rounded-full {{ request()->is('admin/product') ? 'bg-emerald-300' : 'bg-emerald-600' }}"></div>
                            <span class="text-sm font-medium">Products</span>
                        </a>
                    </div>
                </div>
            </div>
    
            <!-- Bagian bawah -->
            <div class="mt-auto">
                <!-- Logout Button -->
                <div class="mt-4">
                    <a href="/admin/logout" onclick="return confirm('Yakin ingin Keluar?')" class="flex items-center gap-4 px-4 py-3 rounded-xl transition-all duration-300 text-red-200 hover:bg-red-500/20 hover:text-red-100">
                        <div class="w-10 h-10 flex items-center justify-center rounded-lg bg-red-500/20">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"/>
                            </svg>
                        </div>
                        <div>
                            <p class="font-semibold">Logout</p>
                            <p class="text-xs opacity-75">Sign out from admin</p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </aside>
    
    <!-- Top Navigation Bar -->
    <x-nav>
        <h1 class="text-2xl font-bold text-gray-800">Admin Dashboard</h1>
        <p class="text-sm text-gray-600">Manage your store efficiently</p>
    </x-nav>

    <!-- Main Content -->
    <main class="xl:ml-80 pt-20 min-h-screen bg-gray-50">
        <div class="lg:px-8 px-4 py-6">
            {{ $slot }}
        </div>
    </main>

   
    <script src="{{ asset('js/responsive-sidebar.js') }}"></script>
    <script src="{{ asset('js/dropdown.js') }}"></script>
</body>

</html>