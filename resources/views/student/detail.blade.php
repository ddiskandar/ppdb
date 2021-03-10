<div class="px-4 my-6 mt-3 sm:px-10 sm:mt-0">
    <div class="mt-2">
        <img class="w-32 h-32 rounded-full" src="/images/default-photo.png" alt="">
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
                {{ $student->school->name }}
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