<x-layout>
    <div class="flex flex-col">
        <section
            class="relative h-screen flex items-center justify-center text-white text-center overflow-hidden rounded-bl-2xl rounded-br-2xl">

            <!-- Gambar latar belakang -->
            <div class="absolute inset-0 bg-cover bg-center bg-no-repeat blur-xs brightness-75"
                style="background-image: url('{{ asset('img/bg.jpg') }}');">
            </div>

            <!-- Overlay hitam semi-transparan (opsional tambahan) -->
            <div class="absolute inset-0 bg-black/60"></div>

            <!-- Konten -->
            <div class="relative z-10 px-6 md:px-10">
                <h1 class="text-4xl sm:text-5xl md:text-6xl font-semibold mb-6 ">Fashion Simpel, Look Maksimal!</h1>
                <p class="mb-8 font-light max-w-xl mx-auto">
                    Koleksi baju kekinian untuk kamu yang aktif, berani, dan stylish. Update gaya tanpa mengorbankan
                    kenyamanan.
                </p>
                <a href="#explore" class="text-white group border border-white font-semibold px-10 py-3 rounded-xl">
                    Explore Now <i
                        class="fa-solid fa-arrow-down text-xs transform transition-transform duration-300 group-hover:translate-y-1"></i>
                </a>
            </div>

        </section>

        <section class="px-6 md:px-10 mt-32 scroll-mt-26" id="explore">
            <div class="flex flex-col justify-center items-center">
                <h4 class="text-2xl sm:text-3xl md:text-4xl font-medium">Fashion Simple, Look Maximal!</h4>
                <p class="w-full md:w-2xl text-center mt-5 font-light">Koleksi busana adat khas Bali yang memadukan tradisi dan gaya modern.</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 mt-10">
                @foreach ($products as $product)
                    <div class="flex py-4 justify-center shadow-sm">
                        <a href="/product/{{ $product->category->slug }}/{{ $product->slug }}"><img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}" class="w-44 h-44 object-cover"></a>
                    </div>
                @endforeach
                {{-- <!-- Baris 1 -->
                <div class="flex py-4 justify-center shadow-sm"><img src="{{ asset('img/image.png') }}" alt="kamen"
                        class="w-44"></div>
                <div class="flex py-4 justify-center shadow-sm"><img src="{{ asset('img/image1.png') }}" alt="kamen"
                        class="w-44"></div>
                <div class="flex py-4 justify-center shadow-sm"><img src="{{ asset('img/image2.png') }}" alt="kamen"
                        class="w-44"></div>

                <!-- Baris 2 -->
                <div class="flex py-4 justify-center shadow-sm"><img src="{{ asset('img/image3.png') }}" alt="kamen"
                        class="w-44"></div>
                <div class="flex py-4 justify-center shadow-sm"><img src="{{ asset('img/image4.png') }}" alt="kamen"
                        class="w-44"></div>
                <div class="flex py-4 justify-center shadow-sm"><img src="{{ asset('img/image5.png') }}" alt="kamen"
                        class="w-44"></div> --}}

            </div>
            <!-- Tombol di baris 3, berada di tengah -->
            <div class="flex justify-center mt-5">
                <a href="/products" class="bg-gray-800 group text-white py-2 px-4 rounded hover:bg-gray-950 transition">
                    More Products<i
                        class="fa-solid fa-arrow-right text-xs ml-1 transform transition-transform duration-300 group-hover:translate-x-1"></i>
                </a>
            </div>
        </section>

        <div class="flex flex-col md:flex-row items-center justify-center gap-8 mt-32 px-6 md:px-10">
            <div class="w-full md:w-1/2 flex justify-center">
                <img src="{{ asset('img/homebot.jpg') }}" alt="asset1"
                    class="rounded-2xl max-h-96 w-full max-w-xl object-cover">
            </div>

            <div class="w-full md:w-1/2 flex flex-col justify-center">
                <h1 class="text-2xl text-center md:text-left md:text-3xl font-semibold">Find Your perfect look at Trisna Collection</h1>
                <p class="mt-10 text-base md:text-lg text-gray-600">
                    Temukan koleksi busana adat khas Bali terbaik di Trisna Collection. Mulai dari berbagai motif
                    tradisional
                    yang sarat makna budaya hingga sentuhan modern yang elegan. Tersedia beragam pilihan seperti Udeng,
                    Kemeja, Selendang, hingga Kamen, cocok untuk upacara adat maupun acara formal.
                </p>
            </div>
        </div>

        <section class="mt-32 px-6 md:px-10">
            <h2 class="text-3xl font-semibold text-center mb-8">Apa Kata Mereka ?</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <div class="bg-white shadow-md p-6 rounded-xl">
                    <p class="italic text-gray-700">"Kualitasnya bagus banget, cocok buat acara adat di Bali. Bahan nyaman dan jahitannya rapi!"</p>
                    <div class="mt-4 font-semibold text-[#4b1e1e]">– Ijnap, Karangasem</div>
                </div>
                <div class="bg-white shadow-md p-6 rounded-xl">
                    <p class="italic text-gray-700">"Saya pakai selendang dari Trisna waktu upacara keluarga, dan semua orang bilang tampilannya anggun banget."</p>
                    <div class="mt-4 font-semibold text-[#4b1e1e]">– Batang, Karangasem</div>
                </div>
                <div class="bg-white shadow-md p-6 rounded-xl">
                    <p class="italic text-gray-700">"Suka banget sama motif kamen-nya. Elegan tapi tetap tradisional."</p>
                    <div class="mt-4 font-semibold text-[#4b1e1e]">– Bagas, Karangasem</div>
                </div>
            </div>
        </section>

        <section class="mt-32 px-6 md:px-10">
            <h2 class="text-3xl font-semibold text-center mb-8">Pertanyaan Umum</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <div>
                    <h3 class="font-semibold">Apakah produk ready stock?</h3>
                    <p class="text-gray-600 mt-2">Sebagian besar produk kami ready stock, tapi beberapa item seperti ukuran khusus atau motif tertentu perlu pre-order</p>
                </div>
                <div>
                    <h3 class="font-semibold">Bagaimana Sistem Pemesanannya?</h3>
                    <p class="text-gray-600 mt-2">Untuk Saat ini kami hanya melayani sistem pemesanan via Whatsapp dan hanya melakukan pembayaran secara COD</p>
                </div>
                <div>
                    <h3 class="font-semibold">Dimana Lokasi Trisna Collection?</h3>
                    <p class="text-gray-600 mt-2">Kami beralamat di...</p>
                </div>
            </div>
        </section>

    </div>

    <div class="flex flex-col justify-center items-center mt-32 px-10">
        <h2 class="text-4xl italic text-center mb-8">TRISNA COLLECTION</h2>
        <p class="text-sm md:text-lg sm:text-xl text-center w-full md:w-2xl text-gray-600 mb-8">Pertanyaan, kerjasama, atau
            pemesanan khusus? Tim kami siap membantu. Jangan ragu untuk menghubungi kami!</p>
        <a href="{{ url('contact') }}"
            class="bg-[#4b1e1e] hover:bg-[#3a1616] text-white font-semibold py-2 px-6 rounded-md">Contact</a>
    </div>

    </div>
</x-layout>
