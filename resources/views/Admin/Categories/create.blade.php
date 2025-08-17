<x-dashboard-layout>
    <div class="px-6 py-10">
        <!-- Judul -->
        <div class="flex gap-1 mb-6">
            <a href="{{ route('admin.category.index') }}" class="text-gray-500">Category</a>
            <h1 class="text-gray-800">/</h1>
            <h1 class="text-gray-800 font-medium">Create</h1>
        </div>

        <!-- Form Create -->
        <div class="bg-white shadow-lg rounded-lg p-6">
            <form action="{{ route('admin.category.store') }}" method="POST">
                @csrf
                @if ($errors->any())
                    <div class="p-3 rounded-md text-red-500 border border-red-500 bg-[#ef44441a] mb-5">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>Error: {{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <!-- Category ID (Opsional, kalau mau auto dari DB bisa dihapus) -->
                    <div>
                        <label for="id" class="block text-gray-700 font-semibold mb-2">ID</label>
                        <input 
                            type="text" 
                            id="id" 
                            name="id" 
                            placeholder="Auto generated"
                            readonly
                            class="w-full border border-gray-300 rounded-lg px-4 py-2 bg-gray-100 focus:outline-none"
                        >
                    </div>

                    <!-- Category Name -->
                    <div>
                        <label for="name" class="block text-gray-700 font-semibold mb-2">Category Name</label>
                        <input 
                            type="text" 
                            id="name" 
                            name="name" 
                            class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-green-400 focus:outline-none"
                            placeholder="Enter category name"
                            value="{{ old('name') }}"
                            required
                        >
                    </div>
                </div>

                <!-- Tombol -->
                <div class="flex items-center gap-4 mt-6">
                    <a 
                        href="{{ route('admin.category.index') }}" 
                        class="border border-gray-400 text-gray-700 px-4 py-2 rounded-lg hover:bg-gray-100 transition"
                    >
                        Cancel
                    </a>
                    <button 
                        type="submit" 
                        class="bg-green-500 hover:bg-green-700 duration-150 text-white font-semibold py-2 px-4 rounded-lg"
                    >
                        Create
                    </button>
                </div>
            </form>
        </div>
    </div>
</x-dashboard-layout>
