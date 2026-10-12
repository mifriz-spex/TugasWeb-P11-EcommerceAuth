<nav x-data="{ open: false }" class="bg-white border-b border-gray-100">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex">
                <!-- Logo -->
                <div class="shrink-0 flex items-center">
                    <a href="{{ route('dashboard') }}">
                        <x-application-logo class="block h-9 w-auto fill-current text-gray-800" />
                    </a>
                </div>

                <!-- Navigation Links -->
                <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
                    <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                        {{ __('Dashboard') }}
                    </x-nav-link>

                    <!-- MENU KHUSUS SESUAI ROLE (DESKTOP) -->
                    @if (Auth::user()->role === 'admin')
                        <x-nav-link href="{{ url('/admin/dashboard') }}" :active="request()->is('admin/dashboard')" class="!text-red-600 hover:!text-red-800 font-bold border-b-2 !border-red-500">
                            👑 Admin Panel
                        </x-nav-link>
                    @elseif (Auth::user()->role === 'editor')
                        <x-nav-link href="{{ url('/editor/dashboard') }}" :active="request()->is('editor/dashboard')" class="!text-blue-600 hover:!text-blue-800 font-bold border-b-2 !border-blue-500">
                            📝 Editor Area
                        </x-nav-link>
                    @endif
                </div>
            </div>

            <!-- Settings Dropdown -->
            <div class="hidden sm:flex sm:items-center sm:ms-6">
                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <button class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition ease-in-out duration-150">
                            <div>{{ Auth::user()->name }}</div>

                            <!-- BADGE ROLE DI DESKTOP -->
                            @if(Auth::user()->role === 'admin')
                                <span class="ms-2 px-2 py-0.5 text-[10px] font-bold rounded-full bg-red-100 text-red-700 border border-red-200 shadow-sm uppercase">Admin</span>
                            @elseif(Auth::user()->role === 'editor')
                                <span class="ms-2 px-2 py-0.5 text-[10px] font-bold rounded-full bg-blue-100 text-blue-700 border border-blue-200 shadow-sm uppercase">Editor</span>
                            @else
                                <span class="ms-2 px-2 py-0.5 text-[10px] font-bold rounded-full bg-gray-100 text-gray-700 border border-gray-200 shadow-sm uppercase">User</span>
                            @endif

                            <div class="ms-1">
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </div>
                        </button>
                    </x-slot>

                    <x-slot name="content">
                        <x-dropdown-link :href="route('profile.edit')">
                            {{ __('Profile') }}
                        </x-dropdown-link>

                        <!-- Authentication -->
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-dropdown-link :href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </x-dropdown-link>
                        </form>
                    </x-slot>
                </x-dropdown>
            </div>

            <!-- Hamburger -->
            <div class="-me-2 flex items-center sm:hidden">
                <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                {{ __('Dashboard') }}
            </x-responsive-nav-link>

            <!-- MENU KHUSUS SESUAI ROLE (MOBILE) -->
            @if (Auth::user()->role === 'admin')
                <x-responsive-nav-link href="{{ url('/admin/dashboard') }}" :active="request()->is('admin/dashboard')" class="text-red-600 font-bold bg-red-50 border-l-4 border-red-500">
                    👑 Admin Panel
                </x-responsive-nav-link>
            @elseif (Auth::user()->role === 'editor')
                <x-responsive-nav-link href="{{ url('/editor/dashboard') }}" :active="request()->is('editor/dashboard')" class="text-blue-600 font-bold bg-blue-50 border-l-4 border-blue-500">
                    📝 Editor Area
                </x-responsive-nav-link>
            @endif
        </div>

        <!-- Responsive Settings Options -->
        <div class="pt-4 pb-1 border-t border-gray-200">
            <div class="px-4">
                <div class="flex items-center gap-2">
                    <div class="font-medium text-base text-gray-800">{{ Auth::user()->name }}</div>
                    
                    <!-- BADGE ROLE DI MOBILE -->
                    @if(Auth::user()->role === 'admin')
                        <span class="px-2 py-0.5 text-[10px] font-bold rounded-full bg-red-100 text-red-700 uppercase">Admin</span>
                    @elseif(Auth::user()->role === 'editor')
                        <span class="px-2 py-0.5 text-[10px] font-bold rounded-full bg-blue-100 text-blue-700 uppercase">Editor</span>
                    @else
                        <span class="px-2 py-0.5 text-[10px] font-bold rounded-full bg-gray-100 text-gray-700 uppercase">User</span>
                    @endif
                </div>
                <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>
            </div>

            <div class="mt-3 space-y-1">
                <x-responsive-nav-link :href="route('profile.edit')">
                    {{ __('Profile') }}
                </x-responsive-nav-link>

                <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <x-responsive-nav-link :href="route('logout')"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        {{ __('Log Out') }}
                    </x-responsive-nav-link>
                </form>
            </div>
        </div>
    </div>
</nav>