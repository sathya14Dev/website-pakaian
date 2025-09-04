<x-layout>
    <!-- isi disini -->
    <div>
        <div class="text-center py-18 bg-gradient-to-b from-slate-50 to-white">
            <h1 class="text-5xl md:text-6xl font-light text-gray-800 mb-4 tracking-wide" data-aos="zoom-in">PRODUCTS</h1>
            <div class="w-20 h-0.5 bg-gradient-to-r from-blue-500 to-purple-500 mx-auto" data-aos="zoom-in"></div>
        </div>

        <div class="px-6 md:px-10 py-20">
            <h2 class="text-xl font-semibold text-gray-800 mb-4">Kategori Produk</h2>

            <div class="flex gap-3 overflow-x-auto scrollbar-hide py-2 px-1">
                <a href="/products" class="group flex-shrink-0 whitespace-nowrap bg-white border rounded-xl px-4 py-2 text-center shadow-sm hover:shadow-md hover:border-purple-300 transition-all duration-300 {{ !$selectedCategory ? 'border-purple-600 ring-2 ring-purple-500' : '' }}">
                    <div class="text-sm font-medium text-gray-700 group-hover:text-purple-600 transition">
                        Semua
                    </div>
                </a>

                @foreach ($categories as $category)
                    <a href="/products?kategori={{ $category->name }}"
                        class="group flex-shrink-0 whitespace-nowrap bg-white border rounded-xl px-4 py-2 text-center shadow-sm hover:shadow-md hover:border-purple-300 transition-all duration-300 {{ $selectedCategory == $category->name ? 'border-purple-600 ring-2 ring-purple-500' : '' }}">
                        <div class="text-sm font-medium text-gray-700 group-hover:text-purple-600 transition">
                            {{ $category->name }}
                        </div>
                    </a>
                @endforeach
            </div>

            <div class="grid grid-cols-1 md:grid-cols-4 sm:grid-cols-2 gap-8 mt-6">
                @foreach ($products as $product)
                    <div
                        class="bg-white rounded-xl shadow-sm overflow-hidden hover:-translate-y-1 hover:shadow-lg hover:ring-2 hover:ring-emerald-500 transition-all duration-300">
                        <a href="/product/{{ $product->category->slug }}/{{ $product->slug }}">
                            <div class="relative aspect-[4/3] ">
                                <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}"
                                    class="w-full h-full  hover:scale-105 transition-transform duration-300">
                                <div
                                    class="absolute top-2 right-2 bg-emerald-600 text-white text-xs px-2 py-1 rounded-md shadow">
                                    {{ $product->category->name }}
                                </div>
                            </div>
                        </a>
                        <div class="p-4">
                            <h3 class="text-base font-semibold text-gray-900 truncate">{{ $product->name }}</h3>
                            <p class="text-sm text-emerald-700 font-medium mt-1">Rp {{ $product->harga }}</p>
                        </div>
                    </div>
                @endforeach
            </div>

            @if ($products->isEmpty())
                <div class="flex justify-center">
                    <p class="p-10 text-center text-gray-500">Looks like there's nothing here yet.</p>
                </div>
            @endif
        </div>

        <div class="mt-6">
            {{ $products->links() }}
        </div>
    </div>
</x-layout>
