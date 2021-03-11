<div class="px-4 my-6 mt-3 sm:px-10 sm:mt-0">
    <div class="mt-2">

        @if($successMessage)
            <div class="text-sm text-green-600">{{ $successMessage }}</div>
        @endif
        
        <div class="flex items-start justify-between mt-4">
            <img class="w-32 h-32 rounded-full" src="/images/default-photo.png" alt="">
            <div class="flex items-center space-x-2">
                <div>
                    <svg class="w-6 h-6 text-gray-300 " fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path>
                    </svg>
                </div>
                @role('admin')
                <div>
                    <svg wire:click="resetPassword" wire:loading.class="animate-spin" class="w-6 h-6 text-gray-300 cursor-pointer hover:text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"></path>
                    </svg>
                </div>
                <div class="">
                    <svg class="w-6 h-6 text-gray-300" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                    </svg>
                </div>
                @endrole
            </div>
        </div>

        <h2 id="slide-over-heading" class="mt-6 text-xl font-bold text-gray-900">
            {{ $student->user->name }}
        </h2>
        <p class="text-sm">{{ $student->user->username }}</p>
        <div class="mt-6 ">
            <label class="block text-sm font-medium text-gray-500">
                No. Handphone
            </label>
            <div>
                {{ $student->phone ?? '-' }}
            </div>
        </div>
        <div class="mt-6 ">
            <label class="block text-sm font-medium text-gray-500">
                Asal Sekolah
            </label>
            <div>
                {{ ($student->school->id != 1) ? $student->school->name : $student->school_temp }}
            </div>
        </div>
        <div class="mt-6 ">
            <label class="block text-sm font-medium text-gray-500">
                Tempat, Tanggal Lahir
            </label>
            <div>
                {{ $student->ttl() ?? '-' }}
            </div>
        </div>
        <div class="mt-6 ">
            <label class="block text-sm font-medium text-gray-500">
                Alamat
            </label>
            <div>
                {{ $student->alamat_lengkap() ?? '-' }}
            </div>
        </div>
        <div class="mt-6 ">
            <label class="block text-sm font-medium text-gray-500">
                Nama Ayah
            </label>
            <div>
                {{ $student->ortu->ayah_nama ?? '-' }}
            </div>
        </div>
        <div class="mt-6 ">
            <label class="block text-sm font-medium text-gray-500">
                Nama Ibu
            </label>
            <div>
                {{ $student->ortu->ibu_nama ?? '-' }}
            </div>
        </div>

    </div>
</div>