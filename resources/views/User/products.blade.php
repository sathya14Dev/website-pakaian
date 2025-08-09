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
                <button class="rounded-2xl border border-gray-300 cursor-pointer py-2 px-4">all</button>
                <button class="rounded-2xl border border-gray-300 cursor-pointer py-2 px-4">kebaya</button>
                <button class="rounded-2xl border border-gray-300 cursor-pointer py-2 px-4">kamen</button>
                <button class="rounded-2xl border border-gray-300 cursor-pointer py-2 px-4">udeng</button>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-4 sm:grid-cols-2 gap-8 mt-6">
                <div class="rounded-lg shadow-xs p-1">
                    <img src={{ asset('Kamen.png') }} class="w-full h-48 object-cover rounded">
                    <h3 class="font-semibold text-lg mt-2">Kamen Batik Balian</h3>
                    <div class="flex justify-between mt-1">
                        <p class="font-light">kamen</p>
                        <p class="font-medium">Rp. 100.000</p>
                    </div>
                </div>
                <div class="rounded-lg shadow-xs p-1">
                    <img src={{ asset('Kamen.png') }} class="w-full h-48 object-cover rounded">
                    <h3 class="font-semibold text-lg mt-2">Kamen Batik Balian</h3>
                    <div class="flex justify-between mt-1">
                        <p class="font-light">kamen</p>
                        <p class="font-medium">Rp. 100.000</p>
                    </div>
                </div>
                <div class="rounded-lg shadow-xs p-1">
                    <img src={{ asset('Kamen.png') }} class="w-full h-48 object-cover rounded">
                    <h3 class="font-semibold text-lg mt-2">Kamen Batik Balian</h3>
                    <div class="flex justify-between mt-1">
                        <p class="font-light">kamen</p>
                        <p class="font-medium">Rp. 100.000</p>
                    </div>
                </div>
                <div class="rounded-lg shadow-xs p-1">
                    <img src={{ asset('Kamen.png') }} class="w-full h-48 object-cover rounded">
                    <h3 class="font-semibold text-lg mt-2">Kamen Batik Balian</h3>
                    <div class="flex justify-between mt-1">
                        <p class="font-light">kamen</p>
                        <p class="font-medium">Rp. 100.000</p>
                    </div>
                </div>
            </div>
        </div>


        <div>
            <div class="py-20">
                <div class="grid lg:grid-cols-2 gap-16 items-center px-6 lg:px-12">
                    <div class="flex justify-center">
                        <div class="relative group">
                            <img class="h-[420px] md:h-[480px] w-full max-w-sm object-cover rounded-3xl shadow-xl hover:shadow-2xl transition-all duration-500 transform group-hover:scale-105"
                                src="{{ asset('bajuu.jpg') }}" alt="Baju Koleksi Trisna Collection">
                            <div
                                class="absolute inset-0 bg-gradient-to-t from-black/20 to-transparent rounded-3xl opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                            </div>
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
                            Eksplorasi koleksi lengkap pakaian adat Bali kami dan temukan keanggunan tradisional yang
                            sesuai
                            dengan kepribadian Anda.
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
                                        <svg class="w-8 h-8 text-red-500" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1">
                                            </path>
                                        </svg>
                                    </div>
                                </div> x
                            </div>
                        </div>

                        <!-- CTA Button -->
                    <div class="pt-6 group">
                        <a href="{{ url('products') }}"
                            class="inline-flex items-center justify-center bg-gradient-to-r from-gray-900 to-gray-800 hover:from-gray-800 hover:to-gray-700 text-white w-full px-8 py-4 md:w-auto md:px-8 md:py-4 rounded-2xl transition-all duration-300 transform hover:scale-105 hover:shadow-xl">
                            <span class="font-semibold text-lg mr-3">KUNJUNGI TOKO</span>
                            <svg class="w-5 h-5 transition-transform duration-300 group-hover:translate-x-1"
                                fill="none" stroke="white" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17 8l4 4m0 0l-4 4m4-4H3" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</x-layout>
