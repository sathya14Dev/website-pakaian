@php
    $isActive = request()->is('admin/category') || request()->is('admin/product');
@endphp

<li id="masterDataMenu" class="{{ $isActive ? 'flex flex-col' : 'hidden flex-col' }}">
    <a href="/admin/category"
        class="{{ request()->is('admin/category') ? 'text-purple-700' : 'text-purple-900' }} hover:brightness-75 w-full py-3 text-base flex flex-row justify-between items-center pl-14">
        <span class="flex flex-row items-center gap-2">Category</span>
    </a>

    <a href="/admin/product"
        class="{{ request()->is('admin/product') ? 'text-purple-700' : 'text-purple-900' }} hover:brightness-75 w-full py-3 text-base flex flex-row justify-between items-center pl-14">
        <span class="flex flex-row items-center gap-2">Product</span>
    </a>
</li>
