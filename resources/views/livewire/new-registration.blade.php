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

            <!-- Email Address -->
            <div class="mt-4">
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block w-full mt-1" type="email" name="email" :value="old('email')" required />
            </div>

            <!-- Asal Sekolah -->
            <div class="mt-4">
                <x-label for="school_id" :value="__('Asal Sekolah')" />

                <select id="school_id" name="school_id" class="block w-full px-3 py-2 mt-1 bg-white border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required>
                    <option value=''>{{ __('Pilih salah satu') }}</option>
                    @foreach ($schools as $school )
                        <option value={{ $school->id }}>{{ $school->name }}</option>
                    @endforeach
                </select>

            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password')" />

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