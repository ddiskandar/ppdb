<div class="p-6 bg-white shadow-2xl md:rounded-md lg:px-12 lg:py-10">
    <form method="POST" action="{{ route('login') }}">
        @csrf

        <div class="mb-6">
            <h2 id="slide-over-heading" class="text-xl font-bold text-gray-900">
                {{ __('Selamat Datang') }}
            </h2>
            <p class="mt-2 text-sm">
                {!! __('Masukkan kombinasi <strong>Nomor Registrasi</strong> dan <strong>Password</strong> yang telah terdaftar untuk masuk ke portal PPDB.') !!}
            </p>
        </div>

        <x-input id="username" class="block w-full mt-3 placeholder-gray-400" type="text" name="username" :value="old('username')" placeholder="Nomor Registrasi" required />

        <x-input id="password" class="block w-full mt-3 placeholder-gray-400" type="password" name="password" :value="old('password')" placeholder="Password" required />

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <x-button class="w-full py-3 mt-4 bg-green-600 hover:bg-green-500">
            {{ __('LOGIN') }}
        </x-button>

        <div class="mt-6 text-sm text-center">
            {{ __('Lupa Nomor Registrasi atau Password? ') }}
        </div>

    </form>

    <div class="flex justify-center pt-6 mt-6 text-sm border-t border-gray-200">
        <a href="#" @click="open = ! open" class="inline-flex items-center justify-center px-6 py-3 text-sm font-semibold tracking-widest text-white uppercase transition duration-150 ease-in-out bg-gray-800 border border-transparent rounded-md active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 hover:bg-gray-700"> Daftar Sekarang</a>
    </div>

</div>