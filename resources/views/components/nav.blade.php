<nav class="w-[calc(100vw-320px)] ml-[320px] bg-secondary-color  fixed z-20 top-0 text-text-primary-color py-3 px-8 border-b border-gray-300">
    <div class="flex flex-row items-center justify-between w-full">

        <div class="flex flex-row gap-5 w-[70%] items-center">
            <button id="hamburger" onclick="toggleSidebar()">
                <i class="fa-solid fa-bars"></i>
            </button>

            <h1 class="text-sm text-gray-800 font-medium"> {{ $slot }} </h1>
        </div>
    </div>
</nav>
