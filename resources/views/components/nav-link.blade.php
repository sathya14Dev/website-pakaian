@props(['active' => false])

<li>
    <a
        class="{{ $active ? 'bg-gray-200 brightness-[.98] text-gray-800' : 'bg-gray-100' }} hover:brightness-95 rounded-md w-full py-3 text-base flex flex-row gap-2 items-center pl-10"
        {{ $attributes }}>{{ $svg }} {{ $slot }}
    </a>
</li>
