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
        </div>
    </nav>
</header>
