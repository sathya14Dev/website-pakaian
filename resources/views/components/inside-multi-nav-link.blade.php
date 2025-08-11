@props(['active' => false, 'href' => ''])

<li>
    <a href="{{ $href }}"
        class="{{ $active ? 'text-purple-700' : 'text-purple-900' }} hover:brightness-75 w-full py-3 text-base flex flex-row justify-between items-center pl-14"
        {{ $attributes }}>
        <span class="flex flex-row items-center gap-2">{{ $slot }}</span>
    </a>
</li>
