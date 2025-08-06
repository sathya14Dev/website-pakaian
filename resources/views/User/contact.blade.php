<x-layout>
    <div class="max-w-5xl mx-auto py-2 px-4">
      <div class="text-center py-16">
        <h1 class="text-5xl md:text-6xl font-light text-gray-800 mb-7 tracking-wide">CONTACT</h1>
        <div class="w-20 h-0.5 bg-gradient-to-r from-blue-500 to-purple-500 mx-auto"></div>
      </div>
        <h2 class="text-4xl italic text-center mb-8">TRISNA COLLECTION</h2>
        <p class="text-sm md:text-xl sm:text-2xl text-center text-gray-600 mb-8">Pertanyaan, kerjasama, atau pemesanan khusus? Tim kami siap membantu. Jangan ragu untuk menghubungi kami!</p>
        <!-- form Pelanggan -->
        <form action="#" method="POST" class="space-y-6">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <input
                    type="text"
                    name="name"
                    placeholder="Enter your name"
                    class="w-full border border-amber-300 rounded px-4 py-2 focus:outline-none focus:ring-2 focus:ring-yellow-300"
                />
                <input
                    type="email"
                    name="email"
                    placeholder="Enter your email"
                    class="w-full border border-amber-300 rounded px-4 py-2 focus:outline-none focus:ring-2 focus:ring-yellow-300"
                />
            </div>

            <textarea
                name="message"
                placeholder="Enter your message"
                rows="5"
                class="w-full border border-amber-300 rounded px-4 py-2 focus:outline-none focus:ring-2 focus:ring-yellow-300"
            ></textarea>

            <div class="text-center">
                <button
                    type="submit"
                    class="bg-[#4b1e1e] hover:bg-[#3a1616] text-white font-semibold py-2 px-6 rounded"
                >
                    Submit Now
                </button>
            </div>
        </form>
        <div class="max-w-6xl mx-auto px-4 py-12 space-y-8">
        <!-- Informasi Kontak -->
        <div class="grid md:grid-cols-3 gap-6">
            <!-- Alamat -->
            <div class="bg-white rounded-lg shadow-md p-6">
                <div class="space-y-2">
                    <h3 class="text-lg font-bold text-yellow-600 flex items-center gap-2">
                        <i class="fas fa-map-marker-alt text-yellow-500"></i>
                        Karangasem, Bali
                    </h3>
                    <p class="text-gray-600 text-sm leading-relaxed">
                        HCQC+VF4, Jl. Raya Besakih, Selatan pasar, Menanga, Kec. Rendang,<br />
                        Kabupaten Karangasem, Bali 80863
                    </p>
                </div>
            </div>

            <!-- WhatsApp -->
            <div class="bg-yellow-600 text-white rounded-lg shadow-md p-6">
                <div class="space-y-2">
                    <h3 class="font-bold text-base flex items-center gap-2">
                        <i class="fab fa-whatsapp text-white text-lg"></i>
                        (+62) 876964357098
                    </h3>
                    <p class="text-sm">
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tempore, consequuntur voluptatum?
                    </p>
                </div>
            </div>

            <!-- Instagram -->
            <div class="bg-yellow-700 rounded-lg shadow-md p-6">
                <div class="space-y-2">
                    <h3 class="font-bold text-base flex items-center gap-2">
                        <i class="fab fa-instagram text-white text-lg"></i>
                        <p class="text-white text-lg">
                          @warcharming
                        </p>
                    </h3>
                    <p class="text-sm text-white">
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tempore, consequuntur voluptatum?
                    </p>
                </div>
            </div>
        </div>

        <!-- Google Maps -->
        <div>
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3946.9113595051704!2d115.4186262740162!3d-8.41036649162832!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd21b9ee7902473%3A0x68d0bc05dc6ec831!2sPasar%20Menanga!5e0!3m2!1sen!2sid!4v1754450746666!5m2!1sen!2sid"
                width="100%"
                height="350"
                style="border:0; border-radius: 1rem;"
                allowfullscreen=""
                loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"
            ></iframe>
        </div>
    </div>
    <!-- Font Awesome (untuk ikon) -->
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</x-layout>
