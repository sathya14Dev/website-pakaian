<x-layout>
  <!-- Judul Utama -->
  <div class="text-center py-18 bg-gradient-to-b from-slate-50 to-white">
    <h1 class="text-5xl md:text-6xl font-light text-gray-800 mb-4 tracking-wide">ABOUT US</h1>
    <div class="w-20 h-0.5 bg-gradient-to-r from-blue-500 to-purple-500 mx-auto"></div>
  </div>

  <div>
    <!-- Kontainer Pertama (Gambar di Kiri, Teks di Kanan) -->
    <div class="max-w-7xl mx-auto py-20">
      <div class="grid lg:grid-cols-2 gap-16 items-center px-6 lg:px-12">
        <div class="flex justify-center">
          <div class="relative group">
            <img 
              class="h-[420px] md:h-[480px] w-full max-w-sm object-cover rounded-3xl shadow-xl hover:shadow-2xl transition-all duration-500 transform group-hover:scale-105" 
              src="{{ asset('Kamen.png') }}" 
              alt="Kamen Bali - Trisna Collection"
            >
            <div class="absolute inset-0 bg-gradient-to-t from-black/20 to-transparent rounded-3xl opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
          </div>
        </div>
        
        <div class="space-y-8">
          <div>
            <h2 class="text-3xl md:text-4xl font-light text-gray-800 mb-6 tracking-wide">
              TRISNA COLLECTION
            </h2>
            <div class="w-16 h-0.5 bg-blue-500 mb-6"></div>
          </div>
          
          <p class="text-lg md:text-xl leading-relaxed text-gray-600">
            Trisna Collection sudah berdiri sejak tahun <span class="font-semibold text-gray-800">1970</span>. 
            Toko ini awalnya menjual berbagai pakaian dan aksesoris seperti tas, 
            namun sekarang berfokus pada pakaian adat Bali seperti baju kebaya, 
            selendang, udeng, termasuk kamen.
          </p>
          
          <p class="text-lg text-gray-600 leading-relaxed">
            Kami berkomitmen untuk melestarikan budaya Bali melalui fashion tradisional yang berkualitas dan autentik.
          </p>
          
          <div class="flex items-center space-x-3 pt-4">
            <div class="w-2 h-2 bg-blue-500 rounded-full"></div>
            <span class="text-sm font-medium text-gray-500 uppercase tracking-wider">Sejak 1970</span>
          </div>
        </div>
      </div>
    </div>

    <!-- Kontainer Kedua (Teks di Kiri, Gambar di Kanan) -->
    <div class="bg-gradient-to-br from-slate-50 to-blue-50/30">
      <div class="max-w-7xl mx-auto pt-20">
        <div class="grid lg:grid-cols-2 gap-16 items-center px-6 lg:px-12">
          <div class="space-y-8">
            <div>
              <h2 class="text-3xl md:text-4xl font-light text-gray-800 mb-6 tracking-wide">
                DEDIKASI & KUALITAS
              </h2>
              <div class="w-16 h-0.5 bg-purple-500 mb-6"></div>
            </div>
            
            <p class="text-lg md:text-xl leading-relaxed text-gray-600">
              Di Trisna Collection, kami menawarkan berbagai produk pakaian adat Bali yang dirancang dengan hati-hati. 
              Setiap item dibuat dengan bahan berkualitas tinggi dan teknik tradisional yang dipertahankan selama bertahun-tahun.
            </p>
            
            <div class="space-y-4 pt-4">
              <div class="flex items-center space-x-4 group hover:translate-x-2 transition-transform duration-300">
                <div class="w-3 h-3 bg-purple-500 rounded-full group-hover:scale-110 transition-transform duration-300"></div>
                <span class="text-gray-700 font-medium">Baju kebaya dengan bordiran unik</span>
              </div>
              <div class="flex items-center space-x-4 group hover:translate-x-2 transition-transform duration-300">
                <div class="w-3 h-3 bg-purple-500 rounded-full group-hover:scale-110 transition-transform duration-300"></div>
                <span class="text-gray-700 font-medium">Selendang tenun tangan</span>
              </div>
              <div class="flex items-center space-x-4 group hover:translate-x-2 transition-transform duration-300">
                <div class="w-3 h-3 bg-purple-500 rounded-full group-hover:scale-110 transition-transform duration-300"></div>
                <span class="text-gray-700 font-medium">Udeng motif khas Bali</span>
              </div>
              <div class="flex items-center space-x-4 group hover:translate-x-2 transition-transform duration-300">
                <div class="w-3 h-3 bg-purple-500 rounded-full group-hover:scale-110 transition-transform duration-300"></div>
                <span class="text-gray-700 font-medium">Aksesori tradisional lainnya</span>
              </div>
            </div>
          </div>
          
          <div class="flex justify-center lg:justify-end">
            <div class="relative group">
              <img 
                class="h-[420px] md:h-[480px] w-full max-w-sm object-cover rounded-3xl shadow-xl hover:shadow-2xl transition-all duration-500 transform group-hover:scale-105" 
                src="{{ asset('Pemilik_Toko.jpg') }}" 
                alt="Pemilik Toko - Trisna Collection"
              >
              <div class="absolute inset-0 bg-gradient-to-t from-black/20 to-transparent rounded-3xl opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Kontainer Ketiga (Gambar di Kiri, Teks di Kanan) -->
    <div class="bg-white">
      <div class="max-w-7xl mx-auto py-20">
        <div class="grid lg:grid-cols-2 gap-16 items-center px-6 lg:px-12">
          <div class="flex justify-center">
            <div class="relative group">
              <img 
                class="h-[420px] md:h-[480px] w-full max-w-sm object-cover rounded-3xl shadow-xl hover:shadow-2xl transition-all duration-500 transform group-hover:scale-105" 
                src="{{ asset('bajuu.jpg') }}" 
                alt="Baju Koleksi Trisna Collection"
              >
              <div class="absolute inset-0 bg-gradient-to-t from-black/20 to-transparent rounded-3xl opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
            </div>
          </div>
          
          <div class="space-y-8">
            <div>
              <h2 class="text-3xl md:text-4xl font-light text-gray-800 mb-6 tracking-wide leading-tight">
                TEMUKAN GAYA SEMPURNA ANDA
              </h2>
              <div class="w-16 h-0.5 bg-gradient-to-r from-pink-500 to-red-500 mb-6"></div>
            </div>
            
            <p class="text-lg md:text-xl leading-relaxed text-gray-600">
              Eksplorasi koleksi lengkap pakaian adat Bali kami dan temukan keanggunan tradisional yang sesuai dengan kepribadian Anda.
            </p>
            
            <!-- Promo Section -->
            <div class="bg-gradient-to-r from-red-50 to-pink-50 rounded-3xl p-8 border border-red-100">
              <div class="flex items-center justify-between">
                <div>
                  <h3 class="text-2xl font-semibold text-gray-800 mb-2">Sales & Discount</h3>
                  <p class="text-5xl font-bold text-red-500">45%</p>
                </div>
                <div class="text-right">
                  <div class="w-16 h-16 bg-red-100 rounded-full flex items-center justify-center">
                    <svg class="w-8 h-8 text-red-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1"></path>
                    </svg>
                  </div>
                </div>
              </div>
            </div>
            
            <div class="pt-6 group">
              <a href="{{ url('products') }}" class="inline-flex items-center justify-center bg-gradient-to-r from-gray-900 to-gray-800 hover:from-gray-800 hover:to-gray-700 text-white w-full px-8 py-4 md:w-auto md:px-8 md:py-4 rounded-2xl transition-all duration-300 transform hover:scale-105 hover:shadow-xl">
                <span class="font-semibold text-lg mr-3">KUNJUNGI TOKO</span>
                <svg class="w-5 h-5 transition-transform duration-300 group-hover:translate-x-1" fill="none" stroke="white" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                </svg>
                </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</x-layout>