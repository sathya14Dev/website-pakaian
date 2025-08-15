<x-dashboard-layout>
    <div class="px-6 py-8">
        <!-- Header -->
        <div class="mb-8">
            <h1 class="text-2xl font-semibold text-gray-500">
                Product/<span class="text-green-600">Create</span>
            </h1>
        </div>
    
        <!-- Form Card -->
        <div class="bg-white rounded-2xl shadow-sm border border-gray-200 overflow-hidden">
            <div class="p-8">
                <form>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        
                        <!-- Nama Produk -->
                        <div class="space-y-2">
                            <label class="block text-sm font-medium text-gray-700">Nama Produk</label>
                            <input type="text" 
                                   placeholder="Masukkan nama produk..."
                                   class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-200">
                        </div>
    
                        <!-- Kategori -->
                        <div class="space-y-2">
                            <label class="block text-sm font-medium text-gray-700">Kategori</label>
                            <select class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-200 bg-white appearance-none cursor-pointer">
                                <option value="">--Pilih Kategori--</option>
                                <option value="Kebaya Modern">Kebaya Modern</option>
                                <option value="Kebaya Tradisional">Kebaya Tradisional</option>
                                <option value="Pakaian Adat">Pakaian Adat</option>
                                <option value="Aksesoris">Aksesoris</option>
                            </select>
                        </div>
    
                        <!-- Harga -->
                        <div class="space-y-2">
                            <label class="block text-sm font-medium text-gray-700">Harga</label>
                            <input type="text" 
                                   placeholder="Masukkan harga produk..."
                                   class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-200">
                        </div>
    
                        <!-- Gambar Produk -->
                        <div class="space-y-2">
                            <label class="block text-sm font-medium text-gray-700">Gambar Produk</label>
                            <div class="relative">
                                <input type="file" 
                                       id="image" 
                                       accept="image/*"
                                       class="absolute inset-0 w-full h-full opacity-0 cursor-pointer z-10">
                                <div class="w-full px-4 py-3 border-2 border-dashed border-gray-300 rounded-lg bg-gray-50 text-gray-700 flex flex-col items-center justify-center cursor-pointer hover:bg-gray-100 hover:border-gray-400 transition-all duration-200 min-h-[120px]">
                                    <svg class="w-8 h-8 text-gray-400 mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12"></path>
                                    </svg>
                                    <span class="text-sm font-medium">Upload gambar produk</span>
                                    <span class="text-xs text-gray-500 mt-1">PNG, JPG, JPEG (Max. 2MB)</span>
                                </div>
                            </div>
                        </div>
    
                        <!-- Deskripsi -->
                        <div class="md:col-span-2 space-y-2">
                            <label class="block text-sm font-medium text-gray-700">Deskripsi</label>
                            <textarea 
                                rows="4"
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-200 resize-none"
                                placeholder="Masukkan deskripsi produk..."></textarea>
                        </div>
    
                    </div>
    
                    <!-- Action Buttons -->
                    <div class="flex items-center gap-3 mt-8 pt-6 border-t border-gray-100">
                        <button type="button" 
                                class="px-6 py-2.5 border border-gray-300 text-gray-700 rounded-lg font-medium hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-gray-500 focus:ring-offset-2 transition-all duration-200">
                            Cancel
                        </button>
                        <button type="submit" 
                                class="px-6 py-2.5 bg-green-600 text-white rounded-lg font-medium hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-green-500 focus:ring-offset-2 transition-all duration-200 shadow-sm">
                            Create Product
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
</x-dashboard-layout>
