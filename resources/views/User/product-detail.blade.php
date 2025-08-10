<x-layout>
  


    <!-- Product Detail -->
    <div class="px-6 md:px-10 py-20 grid grid-cols-1 md:grid-cols-2 gap-8 sm:gap-4 bg-white">
        <div class="flex justify-center">
            <img src="{{ asset('img/produk1.jpg') }}" alt="Loose Fit Hoodie" class="rounded-lg h-[510px] w-full sm:w-lg ">
        </div>
        <div class="flex flex-col">
            <p class="text-sm text-gray-600 mb-2">Men Fashion</p>
            <h2 class="text-4xl font-semibold mb-3">Loose Fit Hoodie</h2>
            <p class="text-xl text-gray-900 mb-8">Rp. 350.000</p>
            <div class="mb-12 flex ">
            <a href="https://wa.me/6281234567890" target="_blank" class=" bg-green-800 flex justify-center text-lg items-center text-white w-full py-2.5 rounded-lg hover:bg-green-900"><i class="fab fa-whatsapp text-3xl"></i>Whatsapp</a>
            </div>
            <h3 class="text-xl font-semibold mb-2">Description</h3>
            <p class="text-gray-600">
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Perspiciatis porro eaque vero iste maxime qui suscipit atque accusantium laudantium corporis!
            </p>
        </div>
    </div>

    <!-- Related Products -->
    <div class="px-6 md:px-10 mt-12">
        <h3 class="text-xl font-semibold text-center mb-8">You might also like</h3>
        <div class="grid grid-cols-1 md:grid-cols-4 sm:grid-cols-2 gap-8">
            @for($i = 0; $i < 4; $i++)
                <div class="rounded-lg shadow-xs p-1">
                    <img src={{ asset('Kamen.png') }} class="w-full h-48 object-cover rounded">
                    <h3 class="font-semibold text-lg mt-2">Kamen Batik Balian</h3>
                    <div class="flex justify-between mt-1">
                        <p class="font-light">kamen</p>
                        <p class="font-medium">Rp. 100.000</p>
                    </div>
                </div>
            @endfor
        </div>
    </div>
</x-layout>