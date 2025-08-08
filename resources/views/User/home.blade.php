<x-layout>
    <div class="flex flex-col">
        <section class="relative h-[500px] flex items-center justify-center text-white text-center overflow-hidden">

            <!-- Gambar latar belakang -->
            <div class="absolute inset-0 bg-cover bg-center bg-no-repeat blur-sm brightness-75"
                style="background-image: url('{{ asset('img/bg.jpg') }}');">
            </div>

            <!-- Overlay hitam semi-transparan (opsional tambahan) -->
            <div class="absolute inset-0 bg-black/30"></div>

            <!-- Konten -->
            <div class="relative z-10">
                <h1 class="text-5xl font-bold mb-4 ">Fashion Simpel, Look Maksimal!</h1>
                <p class="mb-6 max-w-xl mx-auto">
                    Koleksi baju kekinian untuk kamu yang aktif, berani, dan stylish. Update gaya tanpa mengorbankan
                    kenyamanan.
                </p>
                <a href="/products"
                    class="bg-white text-black font-semibold px-6 py-2 rounded hover:bg-gray-200 transition">
                    Explore Now
                </a>
            </div>

        </section>

        <div class="flef flex-col place-items-center mt-6">
            <h4 class="text-2xl font-medium p-4 uppercase">Fashion Simple, Look Maximal!</h4>
            <p class="w-125 justify-self-center text-center pb-7">Lorem ipsum dolor sit amet consectetur adipisicing
                elit. Suscipit, at architecto veritatis iste omnis
                minus placeat. Culpa harum quae iure.</p>
        </div>
        <div class="grid gap-9 grid-cols-3 place-items-center pt-7">
            <!-- Baris 1 -->
            <div class="bg-gray-300"><img src="{{ asset('img/image.png') }}" alt=""></div>
            <div class="bg-gray-300"><img src="{{ asset('img/image1.png') }}" alt=""></div>
            <div class="bg-gray-300"><img src="{{ asset('img/image2.png') }}" alt=""></div>

            <!-- Baris 2 -->
            <div class="bg-gray-300"><img src="{{ asset('img/image3.png') }}" alt=""></div>
            <div class="bg-gray-300"><img src="{{ asset('img/image4.png') }}" alt=""></div>
            <div class="bg-gray-300"><img src="{{ asset('img/image5.png') }}" alt=""></div>

            <!-- Tombol di baris 3, berada di tengah -->
            <div class="col-span-3 flex justify-center">
                <a href="/detail" class="bg-black text-white p-2 px-4 rounded hover:bg-sky-950 transition">
                    More Products
                </a>
            </div>
        </div>
        <div class="flex flex-row items-center justify-center gap-5 min-h-screen w-full px-3">
            <img src="{{ asset('img/homebot.jpg') }}" alt="asset1" class="w-[450px] h-auto rounded-2xl">

            <span class="flex flex-col justify-center text-left max-w-xl">
                <h1 class="text-2xl font-semibold mb-4">Find Your perfect look at Trisna Collection</h1>
                <p class="text-md">
                    Temukan koleksi busana adat khas Bali terbaik di Trisna Collection. Mulai dari berbagai motif
                    tradisional
                    yang sarat makna budaya hingga sentuhan modern yang elegan. Tersedia beragam pilihan seperti Udeng,
                    Kemeja, Selendang, hingga Kamen, cocok untuk upacara adat maupun acara formal.
                </p>
            </span>
        </div>


    </div>
</x-layout>
