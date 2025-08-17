<x-dashboard-layout>
    <div class="px-6 py-10">
        <!-- Judul -->
        <div class="flex gap-1 mb-6">
            <a href="{{ route('admin.category.index') }}" class="text-gray-500">Category</a>
            <h1 class="text-gray-800">/</h1>
            <h1 class="text-gray-800 font-medium">Show</h1>
        </div>

        <!-- Card -->
        <div class="bg-white shadow-lg rounded-lg p-6">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <!-- ID -->
                <div>
                    <label class="block text-gray-700 font-semibold mb-2">ID</label>
                    <input 
                        type="text" 
                        value="{{ $category->id }}" 
                        disabled
                        class="w-full text-gray-500 border border-gray-300 rounded-lg px-4 py-2 bg-gray-100"
                    >
                </div>

                <!-- Category Name -->
                <div>
                    <label class="block text-gray-700 font-semibold mb-2">Category Name</label>
                    <input 
                        type="text" 
                        value="{{ $category->name }}" 
                        disabled
                        class="w-full text-gray-500 border border-gray-300 rounded-lg px-4 py-2 bg-gray-100"
                    >
                </div>
            </div>

            <!-- Tombol -->
            <div class="mt-6">
                <a href="{{ route('admin.category.index') }}"
                    class="border border-gray-400 text-gray-700 px-4 py-2 rounded-lg hover:bg-gray-100 transition">
                    Cancel
                </a>
            </div>
        </div>
    </div>
</x-dashboard-layout>
