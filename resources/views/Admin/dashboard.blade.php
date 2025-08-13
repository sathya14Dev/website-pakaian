<x-dashboard-layout>
    <div class="flex flex-col items-center justify-center w-full px-6 py-10">
        <h1 class="text-4xl font-bold mb-6">Dashboard</h1>
        <p class="text-lg mb-8">Welcome to the admin dashboard!</p>

        <!-- Card Total Produk -->
        <div class="w-full max-w-4xl mb-6">
            <div class="bg-white shadow-lg rounded-lg p-6 flex items-center justify-between">
                <div>
                    <h2 class="text-lg font-semibold text-gray-700">Total Produk</h2>
                    <p class="text-3xl font-bold text-gray-900">128</p>
                </div>
                <div class="bg-green-100 text-green-600 p-3 rounded-full">
                    <!-- Icon box -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M3 3h18M9 3v18m6-18v18" />
                    </svg>
                </div>
            </div>
        </div>

        <!-- Tabel Admin -->
        <div class="w-full max-w-4xl bg-white shadow-lg rounded-lg overflow-hidden">
            <table class="w-full text-left border-collapse">
                <thead>
                    <tr class="bg-gray-100 text-gray-700 uppercase text-sm">
                        <th class="py-3 px-4">ID</th>
                        <th class="py-3 px-4">Name</th>
                        <th class="py-3 px-4">Email</th>
                    </tr>
                </thead>
                <tbody class="text-gray-600">
                    <tr class="border-b hover:bg-gray-50">
                        <td class="py-3 px-4">1</td>
                        <td class="py-3 px-4">Example</td>
                        <td class="py-3 px-4">admin1@example.com</td>
                    </tr>
                    <tr class="hover:bg-gray-50">
                        <td class="py-3 px-4">2</td>
                        <td class="py-3 px-4">Admin Kedua</td>
                        <td class="py-3 px-4">admin2@example.com</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</x-dashboard-layout>
