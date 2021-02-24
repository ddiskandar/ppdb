<x-guest-layout>

    <div x-data="{ open: false, contact: true }">

        <div class="py-16 lg:py-20">
            <div class="px-0 mx-auto max-w-7xl lg:px-24">
                <div class="sm:mt-0">
                    <div class="lg:grid lg:grid-cols-12">
                        <div class="lg:col-span-7">
                            <div class="h-full px-4 lg:flex-col lg:justify-center sm:px-0 lg:flex">
                                <div class="lg:w-5/6">
                                    <h2 class="text-xl font-bold lg:text-2xl">
                                        {{ __('PPDB ONLINE') }}
                                    </h2>
                                    <h1 class="mb-4 text-2xl font-extrabold text-green-700 lg:text-4xl">
                                        {{ __('SMK Plus Al-Farhan') }}
                                    </h1>
                                    <p class="mt-6 text-sm lg:text-base">
                                        {{ __('Untuk calon pendaftar tahun ajaran 2021/2022 bisa mendaftar melalui portal website ini atau langsung datang ke Sekretariat Pendaftaran.') }}
                                    </p>

                                    <div class="mt-6 text-sm lg:text-base">
                                        Sekretariat : Jalan Cisarua Km. 03 Cimahigirang Ds. Citamiang Kec. Kadudampit Kab. Sukabumi 43153
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
                <div class="absolute inset-0 transition-opacity bg-gray-500 bg-opacity-75" aria-hidden="true" x-show="open" x-description="Background overlay, show/hide based on slide-over state." x-transition:enter="ease-in-out duration-500" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" x-transition:leave="ease-in-out duration-500" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0"></div>
                <section class="absolute inset-y-0 right-0 flex max-w-full pl-10" aria-labelledby="slide-over-heading">

                    <div class="relative w-screen max-w-md" x-show="open" x-transition:enter="transform transition ease-in-out duration-500 sm:duration-700" x-transition:enter-start="translate-x-full" x-transition:enter-end="translate-x-0" x-transition:leave="transform transition ease-in-out duration-500 sm:duration-700" x-transition:leave-start="translate-x-0" x-transition:leave-end="translate-x-full">
                        <div class="absolute top-0 left-0 flex pt-4 pr-2 -ml-8 sm:-ml-10 sm:pr-4" x-show="open" x-description="Close button, show/hide based on slide-over state." x-transition:enter="ease-in-out duration-500" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" x-transition:leave="ease-in-out duration-500" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0">
                            <button @click="open = ! open, contact = ! contact" class="text-gray-300 rounded-md hover:text-white focus:outline-none focus:ring-2 focus:ring-white">
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

        <div x-show="contact" class="">
            <x-contact-button />
        </div>

    </div>

</x-guest-layout>