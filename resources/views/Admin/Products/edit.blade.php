<x-dashboard-layout>
    <div class="px-6 py-8">
        <!-- Header -->
        <div class="flex gap-1 mb-6">
            <a href="{{ route('admin.product.index') }}" class="text-gray-500">Product</a>
            <h1 class="text-gray-800">/</h1>
            <h1 class="text-gray-800 font-medium">Edit</h1>
        </div>

        <!-- Form Card -->
        <div class="bg-white rounded-2xl shadow-sm border border-gray-200 overflow-hidden">
            <div class="p-8">
                <form action="{{ route('admin.product.update', $product) }}" method="POST">
                    @csrf
                    @method('PUT')

                    @if ($errors->any())
                        <div class="p-3 rounded-md text-red-500 border border-red-500 bg-[#ef44441a] mb-5">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>Error: {{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

                        <!-- ID -->
                        <div class="space-y-2">
                            <label class="block text-sm font-medium text-gray-700">ID</label>
                            <input type="text" value="{{ $product->id }}" id="id" name="id" readonly
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg bg-gray-100 text-gray-600 cursor-not-allowed">
                        </div>

                        <!-- Nama Produk -->
                        <div class="space-y-2">
                            <label class="block text-sm font-medium text-gray-700">Nama Produk</label>
                            <input type="text" value="{{ old('name', $product->name) }}" id="name" name="name"
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-200">
                        </div>

                        <!-- Kategori -->
                        <div class="space-y-2">
                            <label class="block text-sm font-medium text-gray-700">Kategori</label>
                            <select id="category_id" name="category_id"
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-200 bg-white appearance-none cursor-pointer">
                                <option value="" selected disabled>--Pilih Kategori--</option>
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}"
                                        {{ $product->category_id == $category->id ? 'selected' : '' }}>
                                        {{ $category->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <!-- Harga -->
                        <div class="space-y-2">
                            <label class="block text-sm font-medium text-gray-700">Harga</label>
                            <input type="text" value="{{ old('harga', $product->harga) }}" id="harga" name="harga"
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-200">
                        </div>

                        <!-- Gambar Produk -->
                        <div class="space-y-2">
                            <label class="block text-sm font-medium text-gray-700">Gambar Produk</label>
                            <div class="relative group">
                                <input type="file" id="image" name="image" accept="image/*"
                                    class="absolute inset-0 w-full h-full opacity-0 cursor-pointer z-10">

                                <!-- Image Container -->
                                <div
                                    class="border border-gray-200 rounded-lg bg-gray-50 p-4 cursor-pointer hover:bg-gray-100 transition-all duration-200">
                                    <div class="flex flex-col items-center">
                                        <!-- Image with Overlay -->
                                        <div class="relative">
                                            <img src="{{ asset('storage/' . $product->image) }}"
                                                alt="{{ $product->name }}" class="w-20 h-20 object-cover rounded-lg">

                                            <!-- Overlay on Hover -->
                                            <div
                                                class="absolute inset-0 bg-black bg-opacity-50 rounded-lg flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-200">
                                                <div class="text-center text-white">
                                                    <svg class="w-6 h-6 mx-auto mb-1" fill="none"
                                                        stroke="currentColor" viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2"
                                                            d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12">
                                                        </path>
                                                    </svg>
                                                    <span class="text-xs font-medium">Ganti</span>
                                                </div>
                                            </div>
                                        </div>

                                        <p id="file-name" class="mt-2 text-sm text-gray-600"></p>
                                        <p class="text-xs text-gray-400 mt-1">PNG, JPG, JPEG (Max. 2MB)</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Deskripsi -->
                        <div class="md:col-span-2 space-y-2">
                            <label class="block text-sm font-medium text-gray-700">Deskripsi</label>
                            <textarea rows="4" id="description" name="description"
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-200 resize-none">{{ old('description', $product->description) }}</textarea>
                        </div>

                    </div>

                    <!-- Action Buttons -->
                    <div class="flex items-center gap-3 mt-8 pt-6 border-t border-gray-100">
                        <a href="{{ route('admin.product.index') }}"
                            class="px-6 py-2.5 border border-gray-300 text-gray-700 rounded-lg font-medium hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-gray-500 focus:ring-offset-2 transition-all duration-200">
                            Cancel
                        </a>
                        <button type="submit"
                            class="px-6 py-2.5 bg-blue-600 text-white rounded-lg font-medium hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition-all duration-200 shadow-sm">
                            Update Product
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <style>
        /* Custom select arrow */
        select {
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 20 20'%3e%3cpath stroke='%236b7280' stroke-linecap='round' stroke-linejoin='round' stroke-width='1.5' d='m6 8 4 4 4-4'/%3e%3c/svg%3e");
            background-position: right 0.75rem center;
            background-repeat: no-repeat;
            background-size: 1.5em 1.5em;
            padding-right: 2.5rem;
        }
    </style>

    <script>
        document.getElementById('image').addEventListener('change', function(event) {
            const file = event.target.files[0];
            const fileNameDisplay = document.getElementById('file-name');

            if (file) {
                fileNameDisplay.textContent = `File dipilih: ${file.name}`;
            } else {
                fileNameDisplay.textContent = '';
            }
        });
    </script>
</x-dashboard-layout>
