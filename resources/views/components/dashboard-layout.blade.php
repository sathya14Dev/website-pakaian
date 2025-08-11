@php
    $masterDataActive = request()->is('admin/category') || request()->is('admin/product');
@endphp

<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.0/css/all.min.css">
    @vite('resources/css/app.css')
</head>

<body class="bg-white">
    <aside class="w-80 h-screen overflow-y-auto fixed left-0 top-0 px-8 py-10 bg-gray-100 z-50" id="sidebar">
        <div>
            <div>
                <img src="{{ asset('logo.png') }}" alt="" class=" w-36 h-36 object-contain mx-auto mb-1">
            </div>

            <div class="pt-10">
                <ul class="flex flex-col gap-3">
                    <x-nav-link href="/admin/dashboard" :active="request()->is('admin/dashboard')">
                        <x-slot:svg>
                            <svg viewBox="0 0 24 24" width="24" height="24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                <g id="SVGRepo_iconCarrier">
                                    <path
                                        d="M3.29701 5.2338C3.52243 4.27279 4.27279 3.52243 5.2338 3.29701V3.29701C6.06663 3.10165 6.93337 3.10165 7.7662 3.29701V3.29701C8.72721 3.52243 9.47757 4.27279 9.70299 5.2338V5.2338C9.89835 6.06663 9.89835 6.93337 9.70299 7.7662V7.7662C9.47757 8.72721 8.72721 9.47757 7.7662 9.70299V9.70299C6.93337 9.89835 6.06663 9.89835 5.2338 9.70299V9.70299C4.27279 9.47757 3.52243 8.72721 3.29701 7.7662V7.7662C3.10166 6.93337 3.10166 6.06663 3.29701 5.2338V5.2338Z"
                                        stroke="#363853" stroke-width="1.5"></path>
                                    <path
                                        d="M3.29701 16.2338C3.52243 15.2728 4.27279 14.5224 5.2338 14.297V14.297C6.06663 14.1017 6.93337 14.1017 7.7662 14.297V14.297C8.72721 14.5224 9.47757 15.2728 9.70299 16.2338V16.2338C9.89835 17.0666 9.89835 17.9334 9.70299 18.7662V18.7662C9.47757 19.7272 8.72721 20.4776 7.7662 20.703V20.703C6.93337 20.8983 6.06663 20.8983 5.2338 20.703V20.703C4.27279 20.4776 3.52243 19.7272 3.29701 18.7662V18.7662C3.10166 17.9334 3.10166 17.0666 3.29701 16.2338V16.2338Z"
                                        stroke="#0074c7" stroke-width="1.5"></path>
                                    <path
                                        d="M14.297 5.2338C14.5224 4.27279 15.2728 3.52243 16.2338 3.29701V3.29701C17.0666 3.10165 17.9334 3.10165 18.7662 3.29701V3.29701C19.7272 3.52243 20.4776 4.27279 20.703 5.2338V5.2338C20.8983 6.06663 20.8983 6.93337 20.703 7.7662V7.7662C20.4776 8.72721 19.7272 9.47757 18.7662 9.70299V9.70299C17.9334 9.89835 17.0666 9.89835 16.2338 9.70299V9.70299C15.2728 9.47757 14.5224 8.72721 14.297 7.7662V7.7662C14.1017 6.93337 14.1017 6.06663 14.297 5.2338V5.2338Z"
                                        stroke="#363853" stroke-width="1.5"></path>
                                    <path
                                        d="M14.297 16.2338C14.5224 15.2728 15.2728 14.5224 16.2338 14.297V14.297C17.0666 14.1017 17.9334 14.1017 18.7662 14.297V14.297C19.7272 14.5224 20.4776 15.2728 20.703 16.2338V16.2338C20.8983 17.0666 20.8983 17.9334 20.703 18.7662V18.7662C20.4776 19.7272 19.7272 20.4776 18.7662 20.703V20.703C17.9334 20.8983 17.0666 20.8983 16.2338 20.703V20.703C15.2728 20.4776 14.5224 19.7272 14.297 18.7662V18.7662C14.1017 17.9334 14.1017 17.0666 14.297 16.2338V16.2338Z"
                                        stroke="#363853" stroke-width="1.5"></path>
                                </g>
                            </svg>
                        </x-slot:svg> Dashboard
                    </x-nav-link>

                    <div>
                        <x-multi-nav-link :active="request()->is('admin/category', 'admin/product')">
                            <x-slot:svg>
                                <svg fill="#000000" height="24px" width="24px" version="1.1" id="Layer_1"
                                    xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                    viewBox="0 0 503.56 503.56" xml:space="preserve">
                                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                    <g id="SVGRepo_iconCarrier">
                                        <g transform="translate(1 1)">
                                            <g>
                                                <g>
                                                    <path
                                                        d="M493.08,181.66c-8.533-10.24-20.48-16.213-33.28-16.213c0-18.773-15.36-34.133-34.133-34.133h-17.892 c-3.86-19.681-20.878-34.133-41.841-34.133H267.8l-40.107-47.787c-1.707-2.56-4.267-3.413-6.827-3.413h-153.6 c-18.773,0-34.133,15.36-34.133,34.133v51.2C14.36,131.314-1,146.674-1,165.447v256c0,18.773,15.36,34.133,34.133,34.133h392.533 c18.773,0,34.133-15.36,34.133-34.133v-5.973L501.613,217.5C504.173,204.7,501.613,191.9,493.08,181.66z M50.2,80.114 c0-9.387,7.68-17.067,17.067-17.067H216.6l40.107,47.787c1.707,2.56,4.267,3.413,6.827,3.413h102.4 c11.093,0,20.48,6.827,23.893,17.067H50.2V80.114z M442.733,421.447c0,9.387-7.68,17.067-17.067,17.067H33.133 c-9.387,0-17.067-7.68-17.067-17.067v-256c0-9.387,7.68-17.067,17.067-17.067h8.533h358.4h25.6 c9.387,0,17.067,7.68,17.067,17.067v8.533v238.933V421.447z M485.4,213.234l-25.6,118.613V182.514 c7.68,0,15.36,3.413,20.48,9.387S487.107,205.554,485.4,213.234z">
                                                    </path>
                                                    <path
                                                        d="M161.133,182.514h-102.4c-5.12,0-8.533,3.413-8.533,8.533s3.413,8.533,8.533,8.533h102.4c5.12,0,8.533-3.413,8.533-8.533 S166.253,182.514,161.133,182.514z">
                                                    </path>
                                                    <path
                                                        d="M161.133,216.647h-102.4c-5.12,0-8.533,3.413-8.533,8.533c0,5.12,3.413,8.533,8.533,8.533h102.4 c5.12,0,8.533-3.413,8.533-8.533C169.667,220.06,166.253,216.647,161.133,216.647z">
                                                    </path>
                                                </g>
                                            </g>
                                        </g>
                                    </g>
                                </svg>
                            </x-slot:svg> Master Data
                        </x-multi-nav-link>

                        <ul id="masterDataMenu" class="{{ $masterDataActive ? 'flex flex-col' : 'hidden flex-col' }}">
                            <x-inside-multi-nav-link href="/admin/category"
                                :active="request()->is('admin/category')">Category</x-inside-multi-nav-link>
                            <x-inside-multi-nav-link href="/admin/product"
                                :active="request()->is('admin/product')">Product</x-inside-multi-nav-link>
                        </ul>
                    </div>

                </ul>

                <ul class="mt-60">
                    <x-nav-link onclick="return confirm('Yakin ingin Keluar?')" href="/admin/logout">
                        <x-slot:svg>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                <path fill="currentColor"
                                    d="M5.616 20q-.691 0-1.153-.462T4 18.384V5.616q0-.691.463-1.153T5.616 4h5.903q.214 0 .357.143t.143.357t-.143.357t-.357.143H5.616q-.231 0-.424.192T5 5.616v12.769q0 .23.192.423t.423.192h5.904q.214 0 .357.143t.143.357t-.143.357t-.357.143zm12.444-7.5H9.692q-.213 0-.356-.143T9.192 12t.143-.357t.357-.143h8.368l-1.971-1.971q-.141-.14-.15-.338q-.01-.199.15-.364q.159-.165.353-.168q.195-.003.36.162l2.614 2.613q.242.243.242.566t-.243.566l-2.613 2.613q-.146.146-.347.153t-.366-.159q-.16-.165-.157-.357t.162-.35z" />
                            </svg>
                        </x-slot:svg>
                        Keluar
                    </x-nav-link>
                </ul>
            </div>
        </div>
    </aside>

    <x-nav>Admin</x-nav>

    <main class="xl:w-[calc(100vw - 320px)] xl:ml-[320px] h-screen">
        <div class="lg:px-14 px-5 py-24">
            {{ $slot }}
        </div>
    </main>

    <script src="{{ asset('js/responsive-sidebar.js') }}"></script>
    <script src="{{ asset('js/dropdown.js') }}"></script>
</body>

</html>
