@props(['active' => false])

<li>
    <button id="masterDataBtn"
        class="{{ $active ? 'bg-gray-200 text-gray-800' : 'bg-gray-100' }} 
            hover:brightness-95 rounded-md w-full py-3 text-base flex flex-row justify-between items-center pl-10 pr-5"
        {{ $attributes }}>

        <span class="flex flex-row items-center gap-2">
            {{ $svg }} {{ $slot }}
        </span>

        <i id="masterDataIcon"
            class="fa-solid {{ $active ? 'fa-angle-up' : 'fa-angle-down' }} 
            text-xs transition-transform duration-300"></i>
    </button>
</li>
