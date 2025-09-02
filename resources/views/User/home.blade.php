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
                <h4 class="text-2xl text-center sm:text-3xl md:text-4xl font-bold">Fashion Simple, Look Maximal!</h4>
                <p class="w-full md:w-2xl text-center mt-5 font-light">Koleksi busana adat khas Bali yang memadukan tradisi dan gaya modern.</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mt-12">
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
                <h1 class="text-2xl text-center md:text-left md:text-4xl font-bold mb-4 bg-gradient-to-r from-[#4b1e1e] to-[#6b2c2c] bg-clip-text text-transparent">Find Your perfect look at Trisna Collection</h1>
                <p class="mt-10 text-base md:text-lg text-gray-600">
                    Temukan koleksi busana adat khas Bali terbaik di Trisna Collection. Mulai dari berbagai motif
                    tradisional
                    yang sarat makna budaya hingga sentuhan modern yang elegan. Tersedia beragam pilihan seperti Udeng,
                    Kemeja, Selendang, hingga Kamen, cocok untuk upacara adat maupun acara formal.
                </p>
            </div>
        </div>

        <section class="mt-32 px-6 md:px-12">
            <div class="text-center mb-16">
                <h2 class="text-4xl md:text-5xl font-bold mb-4 bg-gradient-to-r from-[#4b1e1e] to-[#6b2c2c] bg-clip-text text-transparent">Apa Kata Mereka?</h2>
                <p class="text-gray-600 text-lg max-w-2xl mx-auto">Kepuasan pelanggan adalah prioritas utama kami. Berikut testimoni dari pelanggan setia Trisna</p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10">
                <div class="bg-gray-800 shadow-lg hover:shadow-2xl hover:-translate-y-3 transition-all duration-300 p-8 rounded-2xl border-l-4 border-gray-600 relative overflow-hidden group">
                    <div class="absolute -top-2 -right-2 w-16 h-16 bg-gradient-to-br from-gray-700 to-gray-600 rounded-full flex items-center justify-center opacity-20 group-hover:opacity-30 transition-opacity">
                        <svg class="w-8 h-8 text-gray-300" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h4v10h-10z"/>
                        </svg>
                    </div>
                    
                    <div class="flex items-center mb-6">
                        <div class="w-12 h-12 bg-gradient-to-r from-gray-600 to-gray-700 rounded-full flex items-center justify-center text-white font-bold text-lg">I</div>
                        <div class="ml-4">
                            <div class="font-bold text-white text-lg">Ijnap</div>
                            <div class="text-gray-400 text-sm font-medium">Karangasem</div>
                        </div>
                    </div>
                    
                    <p class="text-gray-300 leading-relaxed mb-6 italic font-medium">"Kualitasnya bagus banget, cocok buat acara adat di Bali. Bahan nyaman dan jahitannya rapi!"</p>
                    
                    <div class="flex text-yellow-400 text-xl">★★★★★</div>
                </div>
                
                <div class="bg-gray-800 shadow-lg hover:shadow-2xl hover:-translate-y-3 transition-all duration-300 p-8 rounded-2xl border-l-4 border-gray-600 relative overflow-hidden group">
                    <div class="absolute -top-2 -right-2 w-16 h-16 bg-gradient-to-br from-gray-700 to-gray-600 rounded-full flex items-center justify-center opacity-20 group-hover:opacity-30 transition-opacity">
                        <svg class="w-8 h-8 text-gray-300" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h4v10h-10z"/>
                        </svg>
                    </div>
                    
                    <div class="flex items-center mb-6">
                        <div class="w-12 h-12 bg-gradient-to-r from-gray-600 to-gray-700 rounded-full flex items-center justify-center text-white font-bold text-lg">B</div>
                        <div class="ml-4">
                            <div class="font-bold text-white text-lg">Batang</div>
                            <div class="text-gray-400 text-sm font-medium">Karangasem</div>
                        </div>
                    </div>
                    
                    <p class="text-gray-300 leading-relaxed mb-6 italic font-medium">"Saya pakai selendang dari Trisna waktu upacara keluarga, dan semua orang bilang tampilannya anggun banget."</p>
                    
                    <div class="flex text-yellow-400 text-xl">★★★★★</div>
                </div>
                
                <div class="bg-gray-800 shadow-lg hover:shadow-2xl hover:-translate-y-3 transition-all duration-300 p-8 rounded-2xl border-l-4 border-gray-600 relative overflow-hidden group">
                    <div class="absolute -top-2 -right-2 w-16 h-16 bg-gradient-to-br from-gray-700 to-gray-600 rounded-full flex items-center justify-center opacity-20 group-hover:opacity-30 transition-opacity">
                        <svg class="w-8 h-8 text-gray-300" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h4v10h-10z"/>
                        </svg>
                    </div>
                    
                    <div class="flex items-center mb-6">
                        <div class="w-12 h-12 bg-gradient-to-r from-gray-600 to-gray-700 rounded-full flex items-center justify-center text-white font-bold text-lg">B</div>
                        <div class="ml-4">
                            <div class="font-bold text-white text-lg">Bagas</div>
                            <div class="text-gray-400 text-sm font-medium">Karangasem</div>
                        </div>
                    </div>
                    
                    <p class="text-gray-300 leading-relaxed mb-6 italic font-medium">"Suka banget sama motif kamen-nya. Elegan tapi tetap tradisional."</p>
                    
                    <div class="flex text-yellow-400 text-xl">★★★★★</div>
                </div>
            </div>
        </section>

        <section class="mt-32 px-6 md:px-12">
            <div class="text-center mb-16">
                <h2 class="text-4xl md:text-5xl font-bold mb-4 bg-gradient-to-r from-[#4b1e1e] to-[#6b2c2c] bg-clip-text text-transparent">Pertanyaan Umum</h2>
                <p class="text-gray-600 text-lg max-w-2xl mx-auto">Temukan jawaban untuk pertanyaan yang sering diajukan tentang produk dan layanan kami</p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="bg-gray-800 shadow-lg hover:shadow-xl hover:-translate-y-2 transition-all duration-300 p-8 rounded-2xl border-t-4 border-gray-600 group">
                    <div class="flex items-start mb-4">
                        <div class="w-10 h-10 bg-gradient-to-r from-gray-600 to-gray-700 rounded-full flex items-center justify-center mr-4 flex-shrink-0">
                            <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-3a1 1 0 00-.867.5 1 1 0 11-1.731-1A3 3 0 0113 8a3.001 3.001 0 01-2 2.83V11a1 1 0 11-2 0v-1a1 1 0 011-1 1 1 0 100-2zm0 8a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd"/>
                            </svg>
                        </div>
                        <h3 class="font-bold text-white text-xl group-hover:text-gray-300 transition-colors">Apakah produk ready stock?</h3>
                    </div>
                    <p class="text-gray-400 leading-relaxed ml-14">Sebagian besar produk kami ready stock, tapi beberapa item seperti ukuran khusus atau motif tertentu perlu pre-order</p>
                </div>
                
                <div class="bg-gray-800 shadow-lg hover:shadow-xl hover:-translate-y-2 transition-all duration-300 p-8 rounded-2xl border-t-4 border-gray-600 group">
                    <div class="flex items-start mb-4">
                        <div class="w-10 h-10 bg-gradient-to-r from-gray-600 to-gray-700 rounded-full flex items-center justify-center mr-4 flex-shrink-0">
                            <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"/>
                            </svg>
                        </div>
                        <h3 class="font-bold text-white text-xl group-hover:text-gray-300 transition-colors">Bagaimana Sistem Pemesanannya?</h3>
                    </div>
                    <p class="text-gray-400 leading-relaxed ml-14">Untuk Saat ini kami hanya melayani sistem pemesanan via Whatsapp dan hanya melakukan pembayaran secara COD</p>
                </div>
                
                <div class="bg-gray-800 shadow-lg hover:shadow-xl hover:-translate-y-2 transition-all duration-300 p-8 rounded-2xl border-t-4 border-gray-600 group">
                    <div class="flex items-start mb-4">
                        <div class="w-10 h-10 bg-gradient-to-r from-gray-600 to-gray-700 rounded-full flex items-center justify-center mr-4 flex-shrink-0">
                            <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"/>
                            </svg>
                        </div>
                        <h3 class="font-bold text-white text-xl group-hover:text-gray-300 transition-colors">Dimana Lokasi Trisna Collection?</h3>
                    </div>
                    <p class="text-gray-400 leading-relaxed ml-14">Kami beralamat di...</p>
                </div>
            </div>
        </section>

    </div>

    <div class="flex flex-col justify-center items-center mt-32 px-10">
        <h2 class="text-4xl italic font-bold text-center mb-8">TRISNA COLLECTION</h2>
        <p class="text-sm md:text-lg sm:text-xl text-center w-full md:w-2xl text-gray-600 mb-8">Pertanyaan, kerjasama, atau
            pemesanan khusus? Tim kami siap membantu. Jangan ragu untuk menghubungi kami!</p>
        <a href="{{ url('contact') }}"
            class="bg-gray-800 group text-white py-2 px-4 rounded-md hover:bg-gray-950">Contact
        </a>
    </div>

    </div>
</x-layout>
