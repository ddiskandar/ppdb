<div class="px-4 my-6 sm:px-10">
    <form wire:submit.prevent="addNewStudent" method="POST">
        @csrf

        <!-- Pilihan Kelas -->
        <div>
            <x-label for="pilihan_kelas" :value="__('Pilihan Kelas')" />

            <x-select wire:model.defer="pilihan_kelas" id="pilihan_kelas" name="pilihan_kelas" autocomplete="pilihan_kelas" class="block w-full px-3 mt-1" required>
                <option value="">{{ __('-- Pilih salah-satu') }}</option>
                <option value="0">{{ __('Regular') }}</option>
                <option value="1">{{ __('Boarding') }}</option>
            </x-select>
        </div>

        <!-- Name -->
        <div class="mt-4">
            <x-label for="name" :value="__('Name')" />

            <x-input wire:model.defer="name" id="name" class="block w-full mt-1" type="text" name="name" :value="old('name')" required autofocus />
        </div>

        <!-- Jenis Kelamin -->
        <div class="mt-4">
            <x-label for="jk" :value="__('Jenis Kelamin')" />

            <x-select wire:model.defer="jk" id="jk" name="jk" autocomplete="jk" class="block w-full px-3 mt-1" required>
                <option value="">{{ __('-- Pilih salah-satu') }}</option>
                <option value="L">{{ __('Laki-laki') }}</option>
                <option value="P">{{ __('Perempuan') }}</option>
            </x-select>
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-label for="nisn" :value="__('NISN')" />

            <x-input wire:model.defer="nisn" id="nisn" class="block w-full mt-1" type="text" name="nisn" :value="old('nisn')" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-label for="phone" :value="__('Nomor HP/Whatsapp')" />

            <x-input id="phone" wire:model.defer="phone" class="block w-full mt-1" type="text" name="phone" :value="old('phone')" required />
        </div>

        <!-- Asal Sekolah -->
        <div class="mt-4">
            <x-label for="school_id" :value="__('Asal Sekolah')" />

            <select wire:model.defer="school_id" id="school_id" name="school_id" class="block w-full mt-1 bg-white border border-gray-300 rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 " required>
                <option value="">{{ __('-- Pilih salah satu') }}</option>
                @foreach ($schools as $school )
                <option value={{ $school->id }}>{{ $school->name }}</option>
                @endforeach
            </select>

        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-label for="ayah_nama" :value="__('Nama Ayah Kandung')" />

            <x-input wire:model.defer="ayah_nama" id="ayah_nama" class="block w-full mt-1" type="text" name="ayah_nama" :value="old('ayah_nama')" required />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-label for="ibu_nama" :value="__('Nama Ibu Kandung')" />

            <x-input wire:model.defer="ibu_nama" id="ibu_nama" class="block w-full mt-1" type="text" name="ibu_nama" :value="old('ibu_nama')" required />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-label for="address" :value="__('Alamat Kampung / Jalan')" />

            <x-input wire:model.defer="address" id="address" class="block w-full mt-1" type="text" name="address" :value="old('address')" required />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-label for="rt" :value="__('RT')" />

            <x-input wire:model.defer="rt" id="rt" class="block w-full mt-1" type="text" name="rt" :value="old('rt')" required />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-label for="rw" :value="__('RW')" />

            <x-input wire:model.defer="rw" id="rw" class="block w-full mt-1" type="text" name="rw" :value="old('rw')" required />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-label for="desa" :value="__('Desa')" />

            <x-input wire:model.defer="desa" id="desa" class="block w-full mt-1" type="text" name="desa" :value="old('desa')" required />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-label for="kecamatan" :value="__('Kecamatan')" />

            <x-input wire:model.defer="kecamatan" id="kecamatan" class="block w-full mt-1" type="text" name="kecamatan" :value="old('kecamatan')" required />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-label for="kab" :value="__('Kabupaten')" />

            <x-input wire:model.defer="kab" id="kab" class="block w-full mt-1" type="text" name="kab" :value="old('kab')" required />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-label for="prov" :value="__('Provinsi')" />

            <x-input wire:model.defer="prov" id="prov" class="block w-full mt-1" type="text" name="prov" :value="old('prov')" required />
        </div>

        <div x-data="{ buttonDisabled: false }" class="flex items-center mt-4">

            <x-button class="w-full py-3 mt-4" @click="buttonDisabled = true" x-on:disabled="buttonDisabled">
                <svg wire:loading wire:target="addNewStudent" class="w-5 h-5 -ml-1 text-white animate-spin" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                    <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                    <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                </svg>
                <span wire:loading.remove wire:target="addNewStudent">
                    {{ __('Tambah') }}
                </span>
            </x-button>

        </div>

    </form>
</div>