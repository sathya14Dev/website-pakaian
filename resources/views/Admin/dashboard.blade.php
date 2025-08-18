<x-dashboard-layout>
   
        <!-- Header Section -->
        <div class="text-center mb-12">
            <h1 class="text-4xl md:text-5xl font-bold text-emerald-800 mb-4">Dashboard</h1>
            <p class="text-lg md:text-xl text-gray-600 font-medium">Welcome to the admin dashboard!</p>
            <div class="w-24 h-1 bg-emerald-600 mx-auto mt-4 rounded-full"></div>
        </div>

        <!-- Stats Cards Grid -->
        <div class="max-w-6xl mx-auto grid grid-cols-1 md:grid-cols-3 gap-6 mb-12">
            <!-- Card Total Pesan -->
            <div class="bg-white shadow-xl rounded-2xl p-6 border-l-4 border-emerald-600 hover:shadow-2xl transition-all duration-300">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-sm font-semibold text-gray-500 uppercase tracking-wider mb-2">Total Pesan</p>
                        <p class="text-3xl font-bold text-emerald-800">{{ $jumlahPesans }}</p>
                    </div>
                    <div class="bg-emerald-100 text-emerald-700 p-4 rounded-xl">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M8.625 9.75a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm0 0H8.25m4.125 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm0 0H12m4.125 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm0 0h-.375m-13.5 3.01c0 1.6 1.123 2.994 2.707 3.227 1.087.16 2.185.283 3.293.369V21l4.184-4.183a1.14 1.14 0 0 1 .778-.332 48.294 48.294 0 0 0 5.83-.498c1.585-.233 2.708-1.626 2.708-3.228V6.741c0-1.602-1.123-2.995-2.707-3.228A48.394 48.394 0 0 0 12 3c-2.392 0-4.744.175-7.043.513C3.373 3.746 2.25 5.14 2.25 6.741v6.018Z" />
                        </svg>
                    </div>
                </div>
            </div>

            <!-- Card Total Produk -->
            <div class="bg-white shadow-xl rounded-2xl p-6 border-l-4 border-emerald-600 hover:shadow-2xl transition-all duration-300">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-sm font-semibold text-gray-500 uppercase tracking-wider mb-2">Total Produk</p>
                        <p class="text-3xl font-bold text-emerald-800">{{ $jumlahProducts }}</p>
                    </div>
                    <div class="bg-emerald-100 text-emerald-700 p-4 rounded-xl">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"/>
                        </svg>
                    </div>
                </div>
            </div>

            <!-- Card Total Categories -->
            <div class="bg-white shadow-xl rounded-2xl p-6 border-l-4 border-teal-600 hover:shadow-2xl transition-all duration-300">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-sm font-semibold text-gray-500 uppercase tracking-wider mb-2">Categories</p>
                        <p class="text-3xl font-bold text-teal-800">{{ $jumlahCategories }}</p>
                    </div>
                    <div class="bg-teal-100 text-teal-700 p-4 rounded-xl">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z"/>
                        </svg>
                    </div>
                </div>
            </div>
        </div>

        <!-- Pesan Masuk -->
    <div class="max-w-6xl mx-auto">
        <div class="bg-white shadow-xl rounded-2xl overflow-hidden">
            <!-- Table Header -->
            <div class="bg-gradient-to-r from-emerald-800 to-emerald-700 px-6 py-5">
                <h3 class="text-xl font-semibold text-white">Pesan Masuk</h3>
                <p class="text-emerald-100 text-sm mt-1">Daftar pesan dari customer</p>
            </div>
        </div>

            <!-- Table Content -->
        <div class="overflow-x-auto">
            <table class="w-full">
                <thead>
                    <tr class="bg-emerald-50 border-b border-emerald-100">
                        <th class="py-4 px-6 text-left text-sm font-semibold text-emerald-800 uppercase tracking-wider">ID</th>
                        <th class="py-4 px-6 text-left text-sm font-semibold text-emerald-800 uppercase tracking-wider">Nama</th>
                        <th class="py-4 px-6 text-left text-sm font-semibold text-emerald-800 uppercase tracking-wider">Email</th>
                        <th class="py-4 px-6 text-left text-sm font-semibold text-emerald-800 uppercase tracking-wider">Pesan</th>
                        <th class="py-4 px-6 text-center text-sm font-semibold text-emerald-800 uppercase tracking-wider">Tanggal</th>
                        <th class="py-4 px-6 text-center text-sm font-semibold text-emerald-800 uppercase tracking-wider">Action</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-100">
                    @foreach ($messages as $message)
                        <tr class="hover:bg-emerald-50 transition-colors duration-150">
                            <td class="py-4 px-6 text-gray-700 font-medium">{{ $message->id }}</td>
                            <td class="py-4 px-6 text-gray-800 font-medium">{{ $message->name }}</td>
                            <td class="py-4 px-6 text-gray-700">{{ $message->email }}</td>
                            <td class="py-4 px-6 text-gray-600 truncate max-w-xs">{{ $message->message }}</td>
                            <td class="py-4 px-6 text-gray-700 text-center">{{ $message->created_at->format('d M Y') }}</td>
                            <td class="py-4 px-6 text-gray-600 flex justify-center">
                                <form action="{{ route('admin.messages.destroy', $message->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this email?')">
                                @csrf
                                @method('DELETE')
                                    <button type="submit" class="bg-red-500 hover:bg-red-600 text-white w-9 h-9 rounded-lg flex items-center justify-center transition-colors duration-200 shadow-md hover:shadow-lg">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                                        </svg>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
                
                @if($messages->isEmpty())
                    <div class="flex justify-center">
                        <p class="p-10 text-center text-gray-500">Looks like there's nothing here yet.</p>
                    </div>
                @endif
            </table>
        </div>

        <!-- Table Footer -->
        <div class="bg-gray-50 px-6 py-4 border-t border-gray-200">
            {{ $messages->links() }}
        </div>
    </div>
   
</x-dashboard-layout>