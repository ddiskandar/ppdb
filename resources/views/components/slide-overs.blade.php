<div>
<<<<<<< HEAD
    <div x-show="slide" x-cloak class="fixed inset-0 overflow-hidden">
        <div class="absolute inset-0 overflow-hidden">
            <div class="absolute inset-0 transition-opacity bg-gray-500 bg-opacity-90" aria-hidden="true"
                x-show="slide"
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
                x-show="slide"
                x-transition:enter="transform transition ease-in-out duration-500 sm:duration-700"
                x-transition:enter-start="translate-x-full"
                x-transition:enter-end="translate-x-0"
                x-transition:leave="transform transition ease-in-out duration-500 sm:duration-700"
                x-transition:leave-start="translate-x-0"
                x-transition:leave-end="translate-x-full"
            >
                <div class="absolute top-0 left-0 flex pt-4 pr-2 -ml-8 sm:-ml-10 sm:pr-4"
                    x-show="slide"
                    x-description="Close button, show/hide based on slide-over state."
                    x-transition:enter="ease-in-out duration-500"
                    x-transition:enter-start="opacity-0"
                    x-transition:enter-end="opacity-100"
                    x-transition:leave="ease-in-out duration-500"
                    x-transition:leave-start="opacity-100"
                    x-transition:leave-end="opacity-0"
                >
                <button @click="slide = ! slide" class="text-gray-300 rounded-md hover:text-white focus:outline-none focus:ring-2 focus:ring-white">
                    <span class="sr-only">Close panel</span>
                    <!-- Heroicon name: x -->
                    <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
                </div>
=======
        <div x-show="slide" x-cloak class="fixed inset-0 overflow-hidden">
            <div class="absolute inset-0 overflow-hidden">
                <div class="absolute inset-0 transition-opacity bg-gray-500 bg-opacity-90" aria-hidden="true"
                    x-show="slide"
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
                    x-show="slide"
                    x-transition:enter="transform transition ease-in-out duration-500 sm:duration-700"
                    x-transition:enter-start="translate-x-full"
                    x-transition:enter-end="translate-x-0"
                    x-transition:leave="transform transition ease-in-out duration-500 sm:duration-700"
                    x-transition:leave-start="translate-x-0"
                    x-transition:leave-end="translate-x-full"
                >
                    <div class="absolute top-0 left-0 flex pt-4 pr-2 -ml-8 sm:-ml-10 sm:pr-4"
                        x-show="slide"
                        x-description="Close button, show/hide based on slide-over state."
                        x-transition:enter="ease-in-out duration-500"
                        x-transition:enter-start="opacity-0"
                        x-transition:enter-end="opacity-100"
                        x-transition:leave="ease-in-out duration-500"
                        x-transition:leave-start="opacity-100"
                        x-transition:leave-end="opacity-0"
                    >
                    <button @click="slide = ! slide" class="text-gray-300 rounded-md hover:text-white focus:outline-none focus:ring-2 focus:ring-white">
                        <span class="sr-only">Close panel</span>
                        <!-- Heroicon name: x -->
                        <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                    </div>
>>>>>>> parent of 217d473 (wip)

                    <div class="flex flex-col h-full py-6 overflow-y-scroll bg-white shadow-xl">
                        {{ $slot }}
                    </div>

                </div>
                </section>
            </div>
<<<<<<< HEAD
            </section>
        </div>
    </div>
</div>
=======
        </div>
    </div>
>>>>>>> parent of 217d473 (wip)
