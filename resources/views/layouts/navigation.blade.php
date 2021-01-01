<nav x-data="{ open: false }" class="text-white bg-gray-900 border-b border-gray-100">
    <!-- Primary Navigation Menu -->
    <div class="px-4 mx-auto max-w-7xl lg:px-6">
        <div class="flex justify-between h-16">
            <div class="flex">
                <!-- Logo -->
                <div class="flex items-center flex-shrink-0">
                    <a href="{{ route('dashboard') }}"
                        class="text-lg font-bold"
                    >
                        SMK Plus Al-Farhan
                    </a>
                </div>

                <!-- Navigation Links -->
                <div class="hidden space-x-8 lg:-my-px lg:ml-10 lg:flex">
                    
                    
                    @hasrole('super-admin|admin|committee|interviewer')

                    <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                        {{ __('Dashboard') }}
                    </x-nav-link>
                    

                    <x-nav-link :href="route('master')" :active="request()->routeIs('master')">
                        {{ __('Data Master') }}
                    </x-nav-link>

                    <x-nav-link :href="route('pendaftaran')" :active="request()->routeIs('pendaftaran')">
                        {{ __('Pendaftaran') }}
                    </x-nav-link>
                    
                    <x-nav-link :href="route('pembayaran')" :active="request()->routeIs('pembayaran')">
                        {{ __('Pembayaran') }}
                    </x-nav-link>

                    <x-nav-link :href="route('seleksi')" :active="request()->routeIs('seleksi')">
                        {{ __('Seleksi') }}
                    </x-nav-link>

                    @else

                    <x-nav-link :href="route('home')" :active="request()->routeIs('home')">
                        {{ __('Home') }}
                    </x-nav-link>

                    @endhasrole

                </div>
            </div>

            <!-- Settings Dropdown -->
            <div class="hidden lg:flex lg:items-center lg:ml-6">
                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <button class="flex items-center text-base font-medium text-gray-400 transition duration-150 ease-in-out hover:text-gray-300 hover:border-gray-300 focus:outline-none focus:text-gray-400 focus:border-gray-300">
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16.154" height="16.154"><path data-name="Path 34" d="M2.286 12.964a11.8 11.8 0 0111.583 0M10.6 6.393a2.526 2.526 0 11-2.526-2.526A2.526 2.526 0 0110.6 6.393zm5.051 1.684A7.577 7.577 0 118.077.5a7.577 7.577 0 017.577 7.577z" fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round"/></svg>
                            </div>
                            
                            <div class="ml-2">{{ Auth::user()->name }}</div>

                            <div class="ml-1">
                                <svg class="w-4 h-4 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </div>
                        </button>
                    </x-slot>

                    <x-slot name="content">
                        <x-dropdown-link :href="route('profile')">
                            {{ __('Ubah Profil') }}
                        </x-dropdown-link>
                        
                        <!-- Authentication -->
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-dropdown-link :href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Logout') }}
                            </x-dropdown-link>
                        </form>

                        
                    </x-slot>
                </x-dropdown>
            </div>

            <!-- Hamburger -->
            <div class="flex items-center -mr-2 lg:hidden">
                <button @click="open = ! open" class="inline-flex items-center justify-center p-2 text-gray-400 transition duration-150 ease-in-out rounded-md hover:text-gray-500 focus:outline-none">
                    <svg class="w-6 h-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden lg:hidden">
        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                {{ __('Dashboard') }}
            </x-responsive-nav-link>

            <x-responsive-nav-link :href="route('master')" :active="request()->routeIs('master')">
                {{ __('Data Master') }}
            </x-responsive-nav-link>

            <x-responsive-nav-link :href="route('pendaftaran')" :active="request()->routeIs('pendaftaran')">
                {{ __('Pendaftaran') }}
            </x-responsive-nav-link>

            <x-responsive-nav-link :href="route('pembayaran')" :active="request()->routeIs('pembayaran')">
                {{ __('Pembayaran') }}
            </x-responsive-nav-link>

            <x-responsive-nav-link :href="route('seleksi')" :active="request()->routeIs('seleksi')">
                {{ __('Seleksi') }}
            </x-responsive-nav-link>
        </div>

        <!-- Responsive Settings Options -->
        <div class="pt-4 pb-1 border-t border-gray-800">
            <div class="flex items-center px-4">
                <div class="flex-shrink-0">
                    <svg class="w-10 h-10 text-gray-400 fill-current" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                    </svg>
                </div>

                <div class="ml-3">
                    <div class="text-base font-medium text-white">{{ Auth::user()->name }}</div>
                    <div class="text-sm font-medium text-gray-500">{{ Auth::user()->email }}</div>
                </div>
            </div>

            <div class="mt-3 space-y-1">
                <x-responsive-nav-link :href="route('master')">
                    {{ __('Setting') }}
                </x-responsive-nav-link>

                <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <x-responsive-nav-link :href="route('logout')"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        {{ __('Logout') }}
                    </x-responsive-nav-link>
                </form>
            </div>
        </div>
    </div>
</nav>
