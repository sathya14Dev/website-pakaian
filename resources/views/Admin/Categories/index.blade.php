<x-dashboard-layout>
    <div class="px-6 py-8">
        <!-- Header Section -->
        <div class="mb-8">
            <h1 class="text-3xl font-bold text-gray-800 mb-2">Categories</h1>
            <p class="text-gray-600">Manage your product categories</p>
        </div>

        <!-- Action Bar -->
        <div class="flex justify-between items-center mb-6">
            <div class="text-sm text-gray-600">
                Total: <span class="font-semibold text-gray-800">2 categories</span>
            </div>
            <button class="bg-emerald-700 hover:bg-emerald-800 text-white px-6 py-3 rounded-lg font-medium shadow-lg transition-all duration-200 flex items-center gap-2 hover:shadow-xl">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
                </svg>
                Create Category
            </button>
        </div>

        <!-- Table Container -->
        <div class="bg-white rounded-xl shadow-lg border border-gray-200 overflow-hidden">
            <table class="w-full">
                <thead>
                    <tr class="bg-emerald-800 text-white">
                        <th class="py-4 px-6 text-left font-semibold uppercase text-sm tracking-wider">ID</th>
                        <th class="py-4 px-6 text-left font-semibold uppercase text-sm tracking-wider">Category Name</th>
                        <th class="py-4 px-6 text-center font-semibold uppercase text-sm tracking-wider">Actions</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-100">
                    <tr class="hover:bg-emerald-50 transition-colors duration-150">
                        <td class="py-4 px-6 text-gray-700 font-medium">001</td>
                        <td class="py-4 px-6">
                            <div class="flex items-center">
                                <div class="w-10 h-10 bg-emerald-100 rounded-lg flex items-center justify-center mr-3">
                                    <svg class="w-5 h-5 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z"></path>
                                    </svg>
                                </div>
                                <div>
                                    <p class="text-gray-800 font-medium">Kebaya Modern</p>
                                    <p class="text-sm text-gray-500">Modern style kebaya</p>
                                </div>
                            </div>
                        </td>
                        <td class="py-4 px-6">
                            <div class="flex justify-center gap-2">
                                <!-- View Button -->
                                <button class="bg-emerald-600 hover:bg-emerald-700 text-white w-9 h-9 rounded-lg flex items-center justify-center transition-colors duration-200 shadow-md hover:shadow-lg">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                                    </svg>
                                </button>
                                <!-- Edit Button -->
                                <button class="bg-amber-500 hover:bg-amber-600 text-white w-9 h-9 rounded-lg flex items-center justify-center transition-colors duration-200 shadow-md hover:shadow-lg">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path>
                                    </svg>
                                </button>
                                <!-- Delete Button -->
                                <button class="bg-red-500 hover:bg-red-600 text-white w-9 h-9 rounded-lg flex items-center justify-center transition-colors duration-200 shadow-md hover:shadow-lg">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                                    </svg>
                                </button>
                            </div>
                        </td>
                    </tr>

                    <tr class="hover:bg-emerald-50 transition-colors duration-150">
                        <td class="py-4 px-6 text-gray-700 font-medium">002</td>
                        <td class="py-4 px-6">
                            <div class="flex items-center">
                                <div class="w-10 h-10 bg-emerald-100 rounded-lg flex items-center justify-center mr-3">
                                    <svg class="w-5 h-5 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z"></path>
                                    </svg>
                                </div>
                                <div>
                                    <p class="text-gray-800 font-medium">Kebaya Tradisional</p>
                                    <p class="text-sm text-gray-500">Traditional style kebaya</p>
                                </div>
                            </div>
                        </td>
                        <td class="py-4 px-6">
                            <div class="flex justify-center gap-2">
                                <!-- View Button -->
                                <button class="bg-emerald-600 hover:bg-emerald-700 text-white w-9 h-9 rounded-lg flex items-center justify-center transition-colors duration-200 shadow-md hover:shadow-lg">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                                    </svg>
                                </button>
                                <!-- Edit Button -->
                                <button class="bg-amber-500 hover:bg-amber-600 text-white w-9 h-9 rounded-lg flex items-center justify-center transition-colors duration-200 shadow-md hover:shadow-lg">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path>
                                    </svg>
                                </button>
                                <!-- Delete Button -->
                                <button class="bg-red-500 hover:bg-red-600 text-white w-9 h-9 rounded-lg flex items-center justify-center transition-colors duration-200 shadow-md hover:shadow-lg">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                                    </svg>
                                </button>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <!-- Footer Info -->
        <div class="mt-6 flex justify-between items-center text-sm text-gray-600">
            <p>Showing 1 to 2 of 2 entries</p>
            <div class="flex gap-1">
                <button class="px-3 py-1 rounded bg-gray-200 text-gray-600 hover:bg-gray-300 transition-colors">Previous</button>
                <button class="px-3 py-1 rounded bg-emerald-700 text-white">1</button>
                <button class="px-3 py-1 rounded bg-gray-200 text-gray-600 hover:bg-gray-300 transition-colors">Next</button>
            </div>
        </div>
    </div>
</x-dashboard-layout>