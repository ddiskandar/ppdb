<x-guest-layout>

<div x-data="{ open: false }">

    <div class="py-6 lg:py-24">
        <div class="px-6 mx-auto max-w-7xl lg:px-24">
            <div class="mt-10 sm:mt-0">
            <div class="lg:grid lg:grid-cols-12">
                <div class="lg:col-span-7">
                    <div class="h-full px-4 text-center lg:flex-col lg:text-left lg:justify-center sm:px-0 lg:flex">
                        <div class="lg:w-5/6">
                            <h2 class="text-xl font-bold lg:text-2xl">
                                {{ __('PPDB ONLINE') }}
                            </h2>
                            <h1 class="mb-4 text-2xl font-extrabold text-green-700 lg:text-4xl">
                                {{ __('SMK Plus Al-Farhan') }}
                            </h1>
                            <p class="mb-10 text-sm lg:text-base">
                                {{ __('Untuk calon pendaftar tahun ajaran 2021/2022 bisa mendaftar melalui portal website ini atau langsung datang ke tempat pendaftaran') }}
                            </p>
                            <div @click="open = ! open" class="items-center hidden font-bold cursor-pointer lg:flex">
                                <div class="tracking-widest uppercase">
                                    {{ __('Daftar Sekarang') }}
                                </div>
                                <svg class="ml-4" xmlns="http://www.w3.org/2000/svg" width="16.153" height="13.514" viewBox="0 0 16.153 13.514">
                                <path id="Path_59" data-name="Path 59" d="M11.4,5l5.343,5.343m0,0L11.4,15.686m5.343-5.343H3" transform="translate(-2 -3.586)" fill="none" stroke="#313b4b" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mt-8 lg:mt-0 lg:col-span-5">
                    
                    @livewire('auth.login-card')

                </div>

            </div>
            </div>
        </div>
    </div>

    <div x-show="open" x-cloak class="fixed inset-0 overflow-hidden">
        <div class="absolute inset-0 overflow-hidden">
            <div class="absolute inset-0 transition-opacity bg-gray-500 bg-opacity-75" aria-hidden="true"
                x-show="open"
                x-description="Background overlay, show/hide based on slide-over state." 
                x-transition:enter="ease-in-out duration-500" 
                x-transition:enter-start="opacity-0" 
                x-transition:enter-end="opacity-100" 
                x-transition:leave="ease-in-out duration-500" 
                x-transition:leave-start="opacity-100" 
                x-transition:leave-end="opacity-0" 
            ></div>
            <section class="absolute inset-y-0 right-0 flex max-w-full pl-10" aria-labelledby="slide-over-heading">

            <div class="relative w-screen max-w-md"
                x-show="open"
                x-transition:enter="transform transition ease-in-out duration-500 sm:duration-700"
                x-transition:enter-start="translate-x-full"
                x-transition:enter-end="translate-x-0"
                x-transition:leave="transform transition ease-in-out duration-500 sm:duration-700"
                x-transition:leave-start="translate-x-0"
                x-transition:leave-end="translate-x-full"
            >
                <div class="absolute top-0 left-0 flex pt-4 pr-2 -ml-8 sm:-ml-10 sm:pr-4"
                    x-show="open"
                    x-description="Close button, show/hide based on slide-over state."
                    x-transition:enter="ease-in-out duration-500"
                    x-transition:enter-start="opacity-0"
                    x-transition:enter-end="opacity-100"
                    x-transition:leave="ease-in-out duration-500"
                    x-transition:leave-start="opacity-100"
                    x-transition:leave-end="opacity-0"
                >
                <button @click="open = ! open" class="text-gray-300 rounded-md hover:text-white focus:outline-none focus:ring-2 focus:ring-white">
                    <span class="sr-only">Close panel</span>
                    <!-- Heroicon name: x -->
                    <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
                </div>

                @livewire('auth.new-registration')

            </div>
            </section>
        </div>
    </div>

</div>

</x-guest-layout>
