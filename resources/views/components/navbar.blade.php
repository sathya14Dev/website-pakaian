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
                        Product
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

        <ul class="flex md:hidden flex-col gap-4 py-20 px-10 fixed -right-64 top-0 bottom-0 w-64 z-50 h-screen bg-rose-50 transition duration-500"
            id="side-menu">
            <div class="absolute right-4 top-8" onclick="closeMenu()">
                <i class="fa-solid fa-xmark text-2xl text-black cursor-pointer"></i>
            </div>
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
                    Product
                </a>
            </li>
            <li>
                <a href="/contact" class="{{ request()->is('contact') ? 'font-semibold' : '' }} link-navbar">
                    Contact
                </a>
            </li>
        </ul>
    </nav>

    <script src="{{ asset('js/script.js') }}"></script>
</header>
