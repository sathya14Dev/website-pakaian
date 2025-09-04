@php
    $text = "Halo, saya ingin bertanya tentang produk Anda.";
    $waLink = "https://wa.me/+6285333731517?text=" . urlencode($text);
@endphp

<header>
    <nav class="fixed shadow-sm rounded-bl-2xl rounded-br-xl w-full z-99 bg-white">
        <div class="flex items-center justify-between p-4">
            <a href="/home">
                <img src="{{ asset('logo.png') }}" alt="logo trisna collection" class="pl-4 w-36">
            </a>
            <ul class="hidden md:flex space-x-10 pr-4">
                <li>
                    <a href="/home" class="{{ request()->is('home') ? 'font-semibold' : '' }} link-navbar">
                        Home
                    </a>
                </li>
                <li>
                    <a href="/about" class="{{ request()->is('about') ? 'font-semibold' : '' }} link-navbar">
                        About Us
                    </a>
                </li>
                <li>
                    <a href="/products" class="{{ request()->is('products') ? 'font-semibold' : '' }} link-navbar">
                        Products
                    </a>
                </li>
                <li>
                    <a href="/contact" class="{{ request()->is('contact') ? 'font-semibold' : '' }} link-navbar">
                        Contact
                    </a>
                </li>
            </ul>

            <div class="menu-icon md:hidden flex items-center cursor-pointer">
                <i class="fa-solid fa-bars text-2xl text-gray-800" onclick="openMenu()"></i>
            </div>
        </div>

        <ul id="side-menu"
            class="flex md:hidden flex-col gap-6 py-24 px-8 fixed -right-72 top-0 bottom-0 w-72 z-50 h-screen bg-gradient-to-b from-blue-50 to-cyan-50 shadow-2xl transition-all duration-500 ease-in-out">
            
            <div class="absolute right-5 top-7" onclick="closeMenu()">
                <i class="fa-solid fa-xmark text-3xl text-gray-800 hover:text-rose-500 cursor-pointer transition-colors"></i>
            </div>

            <div class="mb-8">
                <img src="{{ asset('logo.png') }}" alt="logo trisna collection" class="w-48">
            </div>

            <!-- Menu Item -->
            <li>
                <a href="/home" class="{{ request()->is('home') ? 'font-semibold' : 'text-gray-700' }} link-navbar block py-2 px-4 rounded-lg hover:bg-gray-300 transition">
                    Home
                </a>
            </li>
            <li>
                <a href="/about" class="{{ request()->is('about') ? 'font-semibold' : 'text-gray-700' }} link-navbar block py-2 px-4 rounded-lg hover:bg-gray-300 transition">
                    About Us
                </a>
            </li>
            <li>
                <a href="/products" class="{{ request()->is('products') ? 'font-semibold' : 'text-gray-700' }} link-navbar block py-2 px-4 rounded-lg hover:bg-gray-300 transition">
                    Products
                </a>
            </li>
            <li>
                <a href="/contact" class="{{ request()->is('contact') ? 'font-semibold' : 'text-gray-700' }} link-navbar block py-2 px-4 rounded-lg hover:bg-gray-300 transition">
                    Contact
                </a>
            </li>

            <div class="mt-auto">
                <a href="{{ $waLink }}" target="_blank"
                    class="flex items-center justify-center gap-2 py-3 rounded-xl font-semibold text-white bg-gradient-to-r from-green-600 to-green-800 shadow-md hover:shadow-lg transition">
                    Chat via WhatsApp<i class="fab fa-whatsapp text-xl"></i>
                </a>
            </div>
        </ul>

    </nav>

    <script src="{{ asset('js/script.js') }}"></script>
</header>
