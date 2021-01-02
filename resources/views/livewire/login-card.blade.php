<div class="p-8 bg-white rounded-md shadow-2xl lg:px-12 lg:py-10">
    <form method="POST" action="{{ route('login') }}">
        @csrf

        <div class="lg:hidden">
            <h2 id="slide-over-heading" class="text-lg font-bold text-gray-900">
                {{ __('Selamat Datang') }}
            </h2>
            <p class="mt-2 text-sm">
                {{ __('Silahkan login menggunakan nomor registrasi dan password yang sudah anda miliki') }}
            </p>
        </div>

        <x-input id="username" class="block w-full mt-3 placeholder-gray-400" type="text" name="username" :value="old('username')" placeholder="Nomor registrasi, misal : 2122xxxx" required autofocus />

        <x-input id="password" class="block w-full mt-3 placeholder-gray-400" type="password" name="password" :value="old('password')" placeholder="Kata sandi" required autofocus />

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <x-button class="w-full py-3 mt-4 bg-green-600 hover:bg-green-500">
            {{ __('LOGIN') }}
        </x-button>
    </form>

    <div class="pt-6 mt-6 text-sm border-t border-gray-200 lg:text-center">
        {{ __('Belum punya akun? ') }}
        <a href="#" @click="open = ! open" class="font-bold"> Daftar Sekarang</a>
    </div>

</div>