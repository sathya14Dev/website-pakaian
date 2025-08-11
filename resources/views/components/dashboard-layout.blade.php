@php
    $isMasterDataActive = request()->is('admin/category') || request()->is('admin/product');
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
                    <x-dashboard-menu></x-dashboard-menu>

                    <div>
                        <x-dashboard-master-data/>
                        <x-inside-multi-nav-layout />
                    </div>

                </ul>

                <ul class="mt-60">
                    <x-dashboard-logout></x-dashboard-logout>
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
