<x-dashboard-layout>
    <div class="p-6">
        <h1 class="text-xl font-bold mb-6">Product / Lihat</h1>
    
        <div class="bg-white rounded-lg shadow p-6">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <!-- ID -->
                <div>
                    <label class="block text-sm font-medium text-gray-700">ID</label>
                    <input type="text" value="001" readonly
                           class="mt-1 block w-full rounded-md border-gray-300 shadow-sm bg-gray-100 focus:border-green-500 focus:ring-green-500 sm:text-sm px-3 py-2">
                </div>
    
                <!-- Nama Produk -->
                <div>
                    <label class="block text-sm font-medium text-gray-700">Nama Produk</label>
                    <input type="text" value="Kebaya Anggun" readonly
                           class="mt-1 block w-full rounded-md border-gray-300 shadow-sm bg-gray-100 focus:border-green-500 focus:ring-green-500 sm:text-sm px-3 py-2">
                </div>
    
                <!-- Kategori -->
                <div>
                    <label class="block text-sm font-medium text-gray-700">Kategori</label>
                    <input type="text" value="Kebaya Modern" readonly
                           class="mt-1 block w-full rounded-md border-gray-300 shadow-sm bg-gray-100 focus:border-green-500 focus:ring-green-500 sm:text-sm px-3 py-2">
                </div>
    
                <!-- Harga -->
                <div>
                    <label class="block text-sm font-medium text-gray-700">Harga</label>
                    <input type="text" value="Rp 350.000" readonly
                           class="mt-1 block w-full rounded-md border-gray-300 shadow-sm bg-gray-100 focus:border-green-500 focus:ring-green-500 sm:text-sm px-3 py-2">
                </div>
    
                <!-- Deskripsi -->
                <div class="md:col-span-2">
                    <label class="block text-sm font-medium text-gray-700">Deskripsi</label>
                    <textarea rows="3" readonly
                              class="mt-1 block w-full rounded-md border-gray-300 shadow-sm bg-gray-100 focus:border-green-500 focus:ring-green-500 sm:text-sm px-3 py-2">Kebaya modern elegan untuk acara formal</textarea>
                </div>
    
                <!-- Gambar -->
                <div class="md:col-span-2">
                    <label class="block text-sm font-medium text-gray-700">Gambar Produk</label>
                    <img src="https://images.unsplash.com/photo-1594633312681-425c7b97ccd1?w=200&h=200&fit=crop" alt="Kebaya Anggun" class="mt-2 w-48 h-48 object-cover rounded shadow">
                </div>
            </div>
    
            <!-- Tombol Cancel -->
            <div class="mt-6">
                <a href="/products"
                   class="px-4 py-2 bg-gray-200 text-gray-700 rounded hover:bg-gray-300 transition-colors">
                    Cancel
                </a>
            </div>
        </div>
    </div>
</x-dashboard-layout>
