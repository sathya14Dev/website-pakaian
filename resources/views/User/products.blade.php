<x-layout>
    <!-- isi disini -->
    <div>
        <div class="text-center py-20 mb-18">
            <h1 class="text-5xl md:text-6xl font-light text-gray-800 mb-4 tracking-wide">PRODUCTS</h1>
            <div class="w-20 h-0.5 bg-gradient-to-r from-blue-500 to-purple-500 mx-auto"></div>
        </div>

        <div class="px-6 md:px-10">
            <h1 class="text-xl">Category</h1>
            <div class="flex gap-5 mt-2">
                <a href="/products"
                    class="rounded-2xl border px-4 py-2 {{ !$selectedCategory ? 'bg-purple-500 text-white' : '' }}">
                    All
                </a>
                @foreach ($categories as $category)
                    <a href="/products?kategori={{ $category->name }}"
                        class="rounded-2xl border px-4 py-2 {{ $selectedCategory == $category->name ? 'bg-purple-500 text-white' : '' }}">
                        {{ $category->name }}
                    </a>
                @endforeach
                {{-- <button class="rounded-2xl border border-gray-300 cursor-pointer py-2 px-4">all</button>
                <button class="rounded-2xl border border-gray-300 cursor-pointer py-2 px-4">kebaya</button>
                <button class="rounded-2xl border border-gray-300 cursor-pointer py-2 px-4">kamen</button>
                <button class="rounded-2xl border border-gray-300 cursor-pointer py-2 px-4">udeng</button> --}}
            </div>
            <div class="grid grid-cols-1 md:grid-cols-4 sm:grid-cols-2 gap-8 mt-6">
                @foreach ($products as $product)
                    <div class="rounded-lg shadow-xs p-1">
                        <a href="/product/{{ $product->category->slug }}/{{ $product->slug }}"><img src={{ asset('storage/'.$product->image) }} alt="{{ $product->name }}" class="w-full h-48 object-cover rounded">
                        <h3 class="font-semibold text-lg mt-2">{{ $product->name }}</h3>
                        <div class="flex justify-between mt-1">
                            <p class="font-light">{{ $product->category->name }}</p>
                            <p class="font-medium">RP. {{ $product->harga }}</p>
                        </div></a>
                    </div>
                @endforeach
            </div>

            @if($products->isEmpty())
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
