<x-layout>
  


    <!-- Product Detail -->
    <div class="container mx-auto px-6 py-12 grid md:grid-cols-2 gap-8 bg-white shadow mt-6 rounded-lg">
        <div>
            <img src="{{ asset('img/produk1.jpg') }}" alt="Loose Fit Hoodie" class="rounded-lg w-full">
        </div>
        <div>
            <p class="text-sm text-gray-500 mb-2">Men Fashion</p>
            <h2 class="text-3xl font-bold mb-2">Loose Fit Hoodie</h2>
            <p class="text-xl text-green-600 mb-4">Rp. 1.000.000</p>
            <a href="https://wa.me/6281234567890" target="_blank" class="inline-block bg-green-600 text-white px-6 py-2 rounded hover:bg-green-700 mb-4">Whatsapp</a>
            <h3 class="text-xl font-semibold mb-2">Description</h3>
            <p class="text-gray-600">
                Lorem ipsum dolor sit amet consectetur. Phasellus tempor facilisis pellentesque morbi pellentesque.
            </p>
        </div>
    </div>

    <!-- Related Products -->
    <div class="container mx-auto px-6 mt-12">
        <h3 class="text-xl font-semibold mb-4">You might also like</h3>
        <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
            @for($i = 0; $i < 4; $i++)
                <div class="bg-white border p-4 text-center rounded">
                    <img src="{{ asset('img/baju.jpg') }}" alt="Baju" class="mb-2 w-full h-40 object-cover">
                    <p class="text-gray-700">baju</p>
                    <p class="font-semibold text-sm">Rp. 1.000.000</p>
                </div>
            @endfor
        </div>
    </div>
</x-layout>