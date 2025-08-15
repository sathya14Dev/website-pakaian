<x-dashboard-layout>
    <div class="px-6 py-10">
        <!-- Judul -->
        <h1 class="text-2xl font-bold mb-6">Category / Lihat</h1>

        <!-- Card -->
        <div class="bg-white shadow-lg rounded-lg p-6">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <!-- ID -->
                <div>
                    <label class="block text-gray-700 font-semibold mb-2">ID</label>
                    <input 
                        type="text" 
                        value="1" 
                        disabled
                        class="w-full border border-gray-300 rounded-lg px-4 py-2 bg-gray-100"
                    >
                </div>

                <!-- Category Name -->
                <div>
                    <label class="block text-gray-700 font-semibold mb-2">Category Name</label>
                    <input 
                        type="text" 
                        value="Kebaya Modern" 
                        disabled
                        class="w-full border border-gray-300 rounded-lg px-4 py-2 bg-gray-100"
                    >
                </div>
            </div>

            <!-- Tombol -->
            <div class="mt-6">
                <a href=""
                    class="border border-gray-400 text-gray-700 px-4 py-2 rounded-lg hover:bg-gray-100 transition">
                    Cancel
                </a>
            </div>
        </div>
    </div>
</x-dashboard-layout>
