<nav class="w-[calc(100vw-320px)] ml-[320px] bg-white shadow-sm fixed z-20 top-0 py-4 px-4">
    <div class="flex flex-row items-center justify-between w-full">
        <div class="flex flex-row gap-5 w-[70%] items-center">
            <button id="hamburger" onclick="toggleSidebar()">
                <i class="fa-solid fa-bars"></i>
            </button>

            <div class="flex flex-col">
                {{ $slot }}
            </div>
        </div>
    </div>
</nav>
