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
                <div class="rounded-lg shadow-xs p-1">
                    <a href="/product/{{ $product->category->slug }}/{{ $product->slug }}">
                    <img src={{ asset('storage/'.$product->image) }} alt="{{ $product->name }}" class="w-full h-48 object-cover rounded">
                    <h3 class="font-semibold text-lg mt-2">{{ $product->name }}</h3>
                    <div class="flex justify-between mt-1">
                        <p class="font-light">{{ $category->name }}</p>
                        <p class="font-medium">Rp. {{ $product->harga }}</p>
                    </div></a>
                </div>
            @endforeach
        </div>
    </div>
</x-layout>