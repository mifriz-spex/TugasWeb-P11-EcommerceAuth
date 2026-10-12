<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            
            <!-- Welcome Card -->
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg mb-6 border-l-4 
                {{ Auth::user()->role === 'admin' ? 'border-red-500' : (Auth::user()->role === 'editor' ? 'border-blue-500' : 'border-gray-500') }}">
                
                <div class="p-6 text-gray-900 flex items-center justify-between">
                    <div>
                        <h3 class="text-2xl font-bold mb-1">Selamat datang, {{ Auth::user()->name }}! 👋</h3>
                        <p class="text-gray-500">Anda berhasil login menggunakan hak akses 
                            <strong class="uppercase text-{{ Auth::user()->role === 'admin' ? 'red' : (Auth::user()->role === 'editor' ? 'blue' : 'gray') }}-600">
                                {{ Auth::user()->role }}
                            </strong>.
                        </p>
                    </div>
                    <div class="hidden sm:block">
                        <!-- Ilustrasi Simple SVG -->
                        <svg class="w-16 h-16 text-gray-300" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                    </div>
                </div>
            </div>

            <!-- Stats Grid (Contoh tampilan data) -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <!-- Card 1 -->
                <div class="bg-white p-6 rounded-lg shadow-sm border border-gray-100 flex items-center space-x-4">
                    <div class="p-3 rounded-full bg-indigo-100 text-indigo-500">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"></path></svg>
                    </div>
                    <div>
                        <p class="text-sm text-gray-500 font-medium">Total Produk</p>
                        <p class="text-2xl font-bold text-gray-800">50</p>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="bg-white p-6 rounded-lg shadow-sm border border-gray-100 flex items-center space-x-4">
                    <div class="p-3 rounded-full bg-green-100 text-green-500">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"></path></svg>
                    </div>
                    <div>
                        <p class="text-sm text-gray-500 font-medium">Total Kategori</p>
                        <p class="text-2xl font-bold text-gray-800">5</p>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="bg-white p-6 rounded-lg shadow-sm border border-gray-100 flex items-center space-x-4">
                    <div class="p-3 rounded-full bg-yellow-100 text-yellow-500">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path></svg>
                    </div>
                    <div>
                        <p class="text-sm text-gray-500 font-medium">Pengguna</p>
                        <p class="text-2xl font-bold text-gray-800">3</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</x-app-layout>