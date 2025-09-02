<x-dashboard-layout>
    <div class="px-6 py-8">
        <!-- Header Section -->
        <div class="mb-8">
            <h1 class="text-3xl font-bold text-gray-800 mb-2">Products</h1>
            <p class="text-gray-600">Manage your store products</p>
        </div>

        <!-- Action Bar -->
        <div class="flex justify-end mb-6">
            <a href="{{ route('admin.product.create') }}" class="bg-emerald-700 hover:bg-emerald-800 text-white px-4 py-3 rounded-lg font-medium shadow-lg transition-all duration-200 flex items-center gap-2 hover:shadow-xl">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
                </svg>
                Create Product
            </a>
        </div>

        @if (Session('success'))
            <div class="w-full mt-4 mb-4 border border-green-200 rounded-md">
                <p class="p-3 bg-green-100 text-green-800 font-medium"><i
                        class="fa-solid fa-circle-check mr-3"></i>{{ Session('success') }}
                </p>
            </div>
        @endif

        <!-- Table Container -->
        <div class="bg-white rounded-xl shadow-lg border border-gray-200 overflow-x-auto">
            <table class="w-full">
                <thead>
                    <tr class="bg-emerald-800 text-white">
                        <th class="py-4 px-6 text-left font-semibold uppercase text-sm tracking-wider">ID</th>
                        <th class="py-4 px-6 text-left font-semibold uppercase text-sm tracking-wider">Nama</th>
                        <th class="py-4 px-6 text-left font-semibold uppercase text-sm tracking-wider">Jenis Kategori</th>
                        <th class="py-4 px-6 text-left font-semibold uppercase text-sm tracking-wider">Harga</th>
                        <th class="py-4 px-6 text-left font-semibold uppercase text-sm tracking-wider">Deskripsi</th>
                        <th class="py-4 px-6 text-left font-semibold uppercase text-sm tracking-wider">Image</th>
                        <th class="py-4 px-6 text-center font-semibold uppercase text-sm tracking-wider">Actions</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-100">
                    <!-- Product Row -->
                    @foreach ($products as $product)
                        <tr class="hover:bg-emerald-50 transition-colors duration-150">
                            <td class="py-4 px-6 text-gray-700 font-medium">{{ $product->id }}</td>
                            <td class="py-4 px-6 text-gray-800">{{ $product->name }}</td>
                            <td class="py-4 px-6 text-gray-800">{{ $product->category->name }}</td>
                            <td class="py-4 px-6 text-gray-800">Rp {{ $product->harga }}</td>
                            <td class="py-4 px-6 text-gray-600">{{ Str::limit($product->description, 30) }}</td>
                            <td class="py-4 px-6">
                                <img src="{{ asset('storage/' . $product->image) }}" class="w-12 h-12 object-cover rounded-lg border" alt="{{ $product->name }}">
                            </td>
                            <td class="py-4 px-6">
                                <div class="flex justify-center gap-2">
                                    <!-- View -->
                                    <a href="{{ route('admin.product.show', $product) }}" class="bg-emerald-600 hover:bg-emerald-700 text-white w-9 h-9 rounded-lg flex items-center justify-center shadow-md hover:shadow-lg transition">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                                        </svg>
                                    </a>
                                    <!-- Edit -->
                                    <a href="{{ route('admin.product.edit', $product) }}" class="bg-amber-500 hover:bg-amber-600 text-white w-9 h-9 rounded-lg flex items-center justify-center shadow-md hover:shadow-lg transition">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path>
                                        </svg>
                                    </a>
                                    <!-- Delete -->
                                    <form action="{{ route('admin.product.destroy', $product) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this product?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="bg-red-500 hover:bg-red-600 text-white w-9 h-9 rounded-lg flex items-center justify-center shadow-md hover:shadow-lg transition">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                                        </svg>
                                    </button>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                    <!-- Tambah produk lainnya disini -->
                </tbody>
            </table>

            @if($products->isEmpty())
                <div class="flex justify-center">
                    <p class="p-10 text-center text-gray-500">Looks like there's nothing here yet.</p>
                </div>
            @endif
        </div>

        <!-- Footer Info -->
        <div class="mt-6 flex justify-between items-center text-sm text-gray-600">
            {{ $products->links() }}
        </div>
    </div>
</x-dashboard-layout>
