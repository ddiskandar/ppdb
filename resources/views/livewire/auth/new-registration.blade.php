<div class="flex flex-col h-full py-6 overflow-y-scroll bg-white shadow-xl">
    <div class="px-4 mt-6 sm:px-10">
        <h2 id="slide-over-heading" class="text-lg font-bold text-gray-900">
        Buat Akun
        </h2>
        <p class="text-sm">Semua formulir wajib diisi dengan benar</p>
    </div>
    <div class="relative flex-1 px-4 mt-6 sm:px-10">
        <!-- Replace with your content -->
        <!-- Validation Errors -->
    <x-auth-validation-errors class="mb-4" :errors="$errors" />

    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-label for="name" :value="__('Name')" />

            <x-input id="name" class="block w-full mt-1" type="text" name="name" :value="old('name')" required autofocus />
        </div>

         <!-- Jenis Kelamin -->
        <div class="mt-4">
            <x-label for="jk" :value="__('Jenis Kelamin')" />

            <x-select wire:model.defer="jk" id="jk" name="jk" autocomplete="jk" class="block w-full px-3 mt-1">
                <option>{{ __('Pilih salah-satu') }}</option>
                <option value="L">{{ __('Laki-laki') }}</option>
                <option value="P">{{ __('Perempuan') }}</option>
            </x-select>
        </div>

        

        <!-- Email Address -->
        <div class="mt-4">
            <x-label for="nisn" :value="__('NISN')" />

            <x-input id="nisn" class="block w-full mt-1" type="text" name="nisn" :value="old('nisn')" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-label for="phone" :value="__('Nomor HP/Whatsapp')" />

            <x-input id="phone" class="block w-full mt-1" type="text" name="phone" :value="old('phone')" />
        </div>

        <!-- Asal Sekolah -->
        <div class="mt-4">
            <x-label for="school_id" :value="__('Asal Sekolah')" />

            <select id="school_id" name="school_id" class="block w-full mt-1 bg-white border border-gray-300 rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 " required>
                <option value=''>{{ __('Pilih salah satu') }}</option>
                @foreach ($schools as $school )
                    <option value={{ $school->id }}>{{ $school->name }}</option>
                @endforeach
            </select>

        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-label for="ibu_nama" :value="__('Nama Ibu Kandung')" />

            <x-input id="ibu_nama" class="block w-full mt-1" type="text" name="ibu_nama" :value="old('ibu_nama')" required />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-label for="password" :value="__('Password ( digunakan untuk login aplikasi )')" />

            <x-input id="password" class="block w-full mt-1"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-input id="password_confirmation" class="block w-full mt-1"
                            type="password"
                            name="password_confirmation" required />
        </div>

        <div class="flex items-center mt-4">
            

            <x-button class="w-full py-3 mt-4">
                {{ __('Daftar') }}
            </x-button>


        </div>

        {{-- <a class="text-sm text-gray-600 underline hover:text-gray-900" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a> --}}
    </form>
        <!-- /End replace -->
    </div>
    </div>