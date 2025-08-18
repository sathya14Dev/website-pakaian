<x-dashboard-layout>
    <div class="p-6">
        <div class="flex gap-1 mb-6">
            <a href="{{ route('admin.product.index') }}" class="text-gray-500">Product</a>
            <h1 class="text-gray-800">/</h1>
            <h1 class="text-gray-800 font-medium">Show</h1>
        </div>
    
        <div class="bg-white rounded-lg shadow p-6">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <!-- ID -->
                <div>
                    <label class="block text-sm font-medium text-gray-700">ID</label>
                    <input type="text" value="{{ $product->id }}" readonly
                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm bg-gray-100 focus:border-green-500 focus:ring-green-500 sm:text-sm px-3 py-2">
                </div>
    
                <!-- Nama Produk -->
                <div>
                    <label class="block text-sm font-medium text-gray-700">Nama Produk</label>
                    <input type="text" value="{{ $product->name }}" readonly
                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm bg-gray-100 focus:border-green-500 focus:ring-green-500 sm:text-sm px-3 py-2">
                </div>
    
                <!-- Kategori -->
                <div>
                    <label class="block text-sm font-medium text-gray-700">Kategori</label>
                    <input type="text" value="{{ $product->category->name }}" readonly
                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm bg-gray-100 focus:border-green-500 focus:ring-green-500 sm:text-sm px-3 py-2">
                </div>
    
                <!-- Harga -->
                <div>
                    <label class="block text-sm font-medium text-gray-700">Harga</label>
                    <input type="text" value="{{ $product->harga }}" readonly
                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm bg-gray-100 focus:border-green-500 focus:ring-green-500 sm:text-sm px-3 py-2">
                </div>

                <!-- Gambar -->
                <div class="md:col-span-2">
                    <label class="block text-sm font-medium text-gray-700">Gambar Produk</label>
                    <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}" class="mt-2 w-48 h-48 object-cover rounded shadow">
                </div>
                
                <!-- Deskripsi -->
                <div class="md:col-span-2">
                    <label class="block text-sm font-medium text-gray-700">Deskripsi</label>
                    <textarea rows="3" readonly
                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm bg-gray-100 focus:border-green-500 focus:ring-green-500 sm:text-sm px-3 py-2">{{ $product->description }}</textarea>
                </div>
            </div>
    
            <!-- Tombol Cancel -->
            <div class="mt-6">
                <a href="{{ route('admin.product.index') }}"
                    class="px-4 py-2 bg-gray-200 text-gray-700 rounded hover:bg-gray-300 transition-colors">
                    Cancel
                </a>
            </div>
        </div>
    </div>
</x-dashboard-layout>
