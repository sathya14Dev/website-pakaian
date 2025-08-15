<x-dashboard-layout>
    <div class="px-6 py-10">
        <!-- Judul -->
        <h1 class="text-2xl font-bold mb-6">Category / Create</h1>

        <!-- Form Create -->
        <div class="bg-white shadow-lg rounded-lg p-6">
            <form action="" method="POST">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <!-- Category ID (Opsional, kalau mau auto dari DB bisa dihapus) -->
                    <div>
                        <label for="id" class="block text-gray-700 font-semibold mb-2">ID</label>
                        <input 
                            type="text" 
                            id="id" 
                            name="id" 
                            placeholder="Auto generated"
                            readonly
                            class="w-full border border-gray-300 rounded-lg px-4 py-2 bg-gray-100 focus:outline-none"
                        >
                    </div>

                    <!-- Category Name -->
                    <div>
                        <label for="category_name" class="block text-gray-700 font-semibold mb-2">Category Name</label>
                        <input 
                            type="text" 
                            id="category_name" 
                            name="category_name" 
                            class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-green-400 focus:outline-none"
                            placeholder="Enter category name"
                            required
                        >
                    </div>
                </div>

                <!-- Tombol -->
                <div class="flex items-center gap-4 mt-6">
                    <a 
                        href="  " 
                        class="border border-gray-400 text-gray-700 px-4 py-2 rounded-lg hover:bg-gray-100 transition"
                    >
                        Cancel
                    </a>
                    <button 
                        type="submit" 
                        class="bg-green-500 hover:bg-green-700 duration-150 text-white font-semibold py-2 px-4 rounded-lg"
                    >
                        Create
                    </button>
                </div>
            </form>
        </div>
    </div>
</x-dashboard-layout>
