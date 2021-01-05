<div class="p-8 bg-white rounded-md shadow-2xl lg:px-12 lg:py-10">
    <form method="POST" action="{{ route('login') }}">
        @csrf

        <div class="mb-6">
            <h2 id="slide-over-heading" class="text-xl font-bold text-gray-900">
                {{ __('Selamat Datang di Portal PPDB') }}
            </h2>
            <p class="mt-2 text-sm">
                {!! __('Masukkan kombinasi <strong>Nomor Registrasi</strong> dan <strong>Password</strong> yang telah terdaftar untuk masuk ke portal PPDB.') !!}
            </p>
        </div>

        <x-input id="username" class="block w-full mt-3 placeholder-gray-400" type="text" name="username" :value="old('username')" placeholder="Nomor registrasi, misal : 2122.0x.xxxx" required autofocus />

        <x-input id="password" class="block w-full mt-3 placeholder-gray-400" type="password" name="password" :value="old('password')" placeholder="Password" required autofocus />

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <x-button class="w-full py-3 mt-4 bg-green-600 hover:bg-green-500">
            {{ __('LOGIN') }}
        </x-button>
    </form>

    <div class="pt-6 mt-6 text-sm border-t border-gray-200">
        {{ __('Belum punya akun? ') }}
        <a href="#" @click="open = ! open" class="font-bold"> Daftar Sekarang</a>
    </div>

</div>