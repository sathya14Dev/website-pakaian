<x-dashboard-layout>
   
        <!-- Header Section -->
        <div class="text-center mb-12">
            <h1 class="text-5xl font-bold text-emerald-800 mb-4">Dashboard</h1>
            <p class="text-xl text-gray-600 font-medium">Welcome to the admin dashboard!</p>
            <div class="w-24 h-1 bg-emerald-600 mx-auto mt-4 rounded-full"></div>
        </div>

        <!-- Stats Cards Grid -->
        <div class="max-w-6xl mx-auto grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-12">
            <!-- Card Total Produk -->
            <div class="bg-white shadow-xl rounded-2xl p-6 border-l-4 border-emerald-600 hover:shadow-2xl transition-all duration-300">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-sm font-semibold text-gray-500 uppercase tracking-wider mb-2">Total Produk</p>
                        <p class="text-3xl font-bold text-emerald-800">128</p>
                        <p class="text-sm text-emerald-600 font-medium mt-1">+12% dari bulan lalu</p>
                    </div>
                    <div class="bg-emerald-100 text-emerald-700 p-4 rounded-xl">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"/>
                        </svg>
                    </div>
                </div>
            </div>

            <!-- Card Total Categories -->
            <div class="bg-white shadow-xl rounded-2xl p-6 border-l-4 border-teal-600 hover:shadow-2xl transition-all duration-300">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-sm font-semibold text-gray-500 uppercase tracking-wider mb-2">Categories</p>
                        <p class="text-3xl font-bold text-teal-800">15</p>
                        <p class="text-sm text-teal-600 font-medium mt-1">2 kategori baru</p>
                    </div>
                    <div class="bg-teal-100 text-teal-700 p-4 rounded-xl">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z"/>
                        </svg>
                    </div>
                </div>
            </div>

            <!-- Card Total Orders -->
            <div class="bg-white shadow-xl rounded-2xl p-6 border-l-4 border-green-600 hover:shadow-2xl transition-all duration-300">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-sm font-semibold text-gray-500 uppercase tracking-wider mb-2">Orders</p>
                        <p class="text-3xl font-bold text-green-800">342</p>
                        <p class="text-sm text-green-600 font-medium mt-1">24 hari ini</p>
                    </div>
                    <div class="bg-green-100 text-green-700 p-4 rounded-xl">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"/>
                        </svg>
                    </div>
                </div>
            </div>

            <!-- Card Revenue -->
            <div class="bg-white shadow-xl rounded-2xl p-6 border-l-4 border-emerald-500 hover:shadow-2xl transition-all duration-300">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-sm font-semibold text-gray-500 uppercase tracking-wider mb-2">Revenue</p>
                        <p class="text-3xl font-bold text-emerald-800">Rp 25M</p>
                        <p class="text-sm text-emerald-600 font-medium mt-1">Bulan ini</p>
                    </div>
                    <div class="bg-emerald-100 text-emerald-700 p-4 rounded-xl">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1"/>
                        </svg>
                    </div>
                </div>
            </div>
        </div>

        <!-- Admin Table Section -->
        <div class="max-w-6xl mx-auto">
            <div class="bg-white shadow-xl rounded-2xl overflow-hidden">
                <!-- Table Header -->
                <div class="bg-gradient-to-r from-emerald-800 to-emerald-700 px-6 py-5">
                    <div class="flex items-center justify-between">
                        <div>
                            <h3 class="text-xl font-semibold text-white">Admin Management</h3>
                            <p class="text-emerald-100 text-sm mt-1">Manage system administrators</p>
                        </div>
                        <button class="bg-white text-emerald-700 px-4 py-2 rounded-lg font-medium hover:bg-emerald-50 transition-colors duration-200 flex items-center gap-2">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"/>
                            </svg>
                            Add Admin
                        </button>
                    </div>
                </div>

                <!-- Table Content -->
                <div class="overflow-x-auto">
                    <table class="w-full">
                        <thead>
                            <tr class="bg-emerald-50 border-b border-emerald-100">
                                <th class="py-4 px-6 text-left text-sm font-semibold text-emerald-800 uppercase tracking-wider">ID</th>
                                <th class="py-4 px-6 text-left text-sm font-semibold text-emerald-800 uppercase tracking-wider">Name</th>
                                <th class="py-4 px-6 text-left text-sm font-semibold text-emerald-800 uppercase tracking-wider">Email</th>
                                <th class="py-4 px-6 text-left text-sm font-semibold text-emerald-800 uppercase tracking-wider">Status</th>
                                <th class="py-4 px-6 text-center text-sm font-semibold text-emerald-800 uppercase tracking-wider">Actions</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-100">
                            <tr class="hover:bg-emerald-50 transition-colors duration-150">
                                <td class="py-4 px-6 text-gray-700 font-medium">#001</td>
                                <td class="py-4 px-6">
                                    <div class="flex items-center">
                                        <div class="w-10 h-10 bg-emerald-600 rounded-full flex items-center justify-center mr-3">
                                            <span class="text-white font-semibold text-sm">E</span>
                                        </div>
                                        <div>
                                            <p class="text-gray-800 font-medium">Example Admin</p>
                                            <p class="text-sm text-gray-500">Super Admin</p>
                                        </div>
                                    </div>
                                </td>
                                <td class="py-4 px-6 text-gray-700">admin1@example.com</td>
                                <td class="py-4 px-6">
                                    <span class="px-3 py-1 text-xs font-medium bg-emerald-100 text-emerald-800 rounded-full">Active</span>
                                </td>
                                <td class="py-4 px-6">
                                    <div class="flex justify-center gap-2">
                                        <button class="bg-emerald-600 hover:bg-emerald-700 text-white w-8 h-8 rounded-lg flex items-center justify-center transition-colors">
                                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
                                            </svg>
                                        </button>
                                        <button class="bg-amber-500 hover:bg-amber-600 text-white w-8 h-8 rounded-lg flex items-center justify-center transition-colors">
                                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/>
                                            </svg>
                                        </button>
                                    </div>
                                </td>
                            </tr>

                            <tr class="hover:bg-emerald-50 transition-colors duration-150">
                                <td class="py-4 px-6 text-gray-700 font-medium">#002</td>
                                <td class="py-4 px-6">
                                    <div class="flex items-center">
                                        <div class="w-10 h-10 bg-teal-600 rounded-full flex items-center justify-center mr-3">
                                            <span class="text-white font-semibold text-sm">A</span>
                                        </div>
                                        <div>
                                            <p class="text-gray-800 font-medium">Admin Kedua</p>
                                            <p class="text-sm text-gray-500">Content Manager</p>
                                        </div>
                                    </div>
                                </td>
                                <td class="py-4 px-6 text-gray-700">admin2@example.com</td>
                                <td class="py-4 px-6">
                                    <span class="px-3 py-1 text-xs font-medium bg-emerald-100 text-emerald-800 rounded-full">Active</span>
                                </td>
                                <td class="py-4 px-6">
                                    <div class="flex justify-center gap-2">
                                        <button class="bg-emerald-600 hover:bg-emerald-700 text-white w-8 h-8 rounded-lg flex items-center justify-center transition-colors">
                                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
                                            </svg>
                                        </button>
                                        <button class="bg-amber-500 hover:bg-amber-600 text-white w-8 h-8 rounded-lg flex items-center justify-center transition-colors">
                                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/>
                                            </svg>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <!-- Table Footer -->
                <div class="bg-gray-50 px-6 py-4 border-t border-gray-200">
                    <div class="flex items-center justify-between">
                        <p class="text-sm text-gray-600">Showing 1 to 2 of 2 administrators</p>
                        <div class="flex gap-2">
                            <button class="px-3 py-1 text-sm bg-white border border-gray-300 rounded-md text-gray-700 hover:bg-gray-50">Previous</button>
                            <button class="px-3 py-1 text-sm bg-emerald-600 text-white rounded-md">1</button>
                            <button class="px-3 py-1 text-sm bg-white border border-gray-300 rounded-md text-gray-700 hover:bg-gray-50">Next</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
   
</x-dashboard-layout>