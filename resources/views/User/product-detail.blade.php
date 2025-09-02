<x-layout>
    @php
        $text = "Halo, apakah produk ini [$product->name] masih ada?";
        $waLink = "https://wa.me/6281234567890?text=" . urlencode($text);
    @endphp


    <!-- Product Detail -->
    <div class="px-6 md:px-10 py-20 grid grid-cols-1 md:grid-cols-2 gap-8 sm:gap-4 bg-white">
        <div class="flex justify-center">
            <img src="{{ asset('storage/'.$product->image) }}" alt="{{ $product->name }}" class="rounded-lg h-[510px] w-full sm:w-lg ">
        </div>
        <div class="flex flex-col">
            <p class="text-sm text-gray-600 mb-2">{{ $category->name }}</p>
            <h2 class="text-4xl font-semibold mb-3">{{ $product->name }}</h2>
            <p class="text-xl text-gray-900 mb-8">RP. {{ $product->harga }}</p>
            <div class="mb-12 flex ">
            <a href="{{ $waLink }}" class=" bg-green-800 flex justify-center text-lg items-center text-white w-full py-2.5 rounded-lg hover:bg-green-900"><i class="fab fa-whatsapp text-3xl"></i>Whatsapp</a>
            </div>
            <h3 class="text-xl font-semibold mb-2">Description</h3>
            <p class="text-gray-600">
                {{ $product->description }}
            </p>
        </div>
    </div>

    <!-- Related Products -->
    <div class="px-6 md:px-10 mt-12">
        <h3 class="text-xl font-semibold text-center mb-8">You might also like</h3>
        <div class="grid grid-cols-1 md:grid-cols-4 sm:grid-cols-2 gap-8">
           @foreach ($products as $product)
                    <div class="bg-white rounded-xl shadow-sm overflow-hidden hover:-translate-y-1 transition-all duration-300">
                        <a href="/product/{{ $product->category->slug }}/{{ $product->slug }}">
                            <div class="relative aspect-[4/3] ">
                                <img src="{{ asset('storage/' . $product->image) }}" 
                                    alt="{{ $product->name }}" 
                                    class="w-full h-full  hover:scale-105 transition-transform duration-300">
                                <div class="absolute top-2 left-2 bg-emerald-600 text-white text-xs px-2 py-1 rounded-md shadow">
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
    </div>
</x-layout>