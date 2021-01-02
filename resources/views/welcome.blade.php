<x-guest-layout>
    <div class="pt-32">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
        
            <div class="grid grid-cols-12 gap-12">
                <div class="col-span-7 my-auto">
                    <h2 class="text-2xl font-semibold">PPDB ONLINE</h2>
                    <h1 class="text-4xl font-bold text-green-700">SMK Plus Al-Farhan</h1>
                    <p class="mb-12">Untuk calon pendaftar tahun ajaran 2021/2022 bisa mendaftar melalui website ini atau langsung datang ke tempat pendaftaran</p>
                    <a href="/register" class="flex items-center font-bold">
                        <div>DAFTAR SEKARANG</div> 
                        <svg xmlns="http://www.w3.org/2000/svg" class="ml-4" width="16.153" height="13.514" viewBox="0 0 16.153 13.514">
                        <path id="Path_59" data-name="Path 59" d="M11.4,5l5.343,5.343m0,0L11.4,15.686m5.343-5.343H3" transform="translate(-2 -3.586)" fill="none" stroke="#313b4b" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/>
                        </svg>
                    </a>
                </div>
                
                <div class="col-span-5 ">
                    <form method="POST" action="{{ route('login') }}">
                    @csrf
                        <div class="p-12 space-y-3 bg-white rounded-md shadow-2xl">

                        <input type="text" name="email" id="email" placeholder="Nomor registrasi"
                            class="block w-full py-3 placeholder-gray-400 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                        <input type="password" name="password" id="password" placeholder="Kata Sandi"
                            class="block w-full py-3 placeholder-gray-400 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                        <button type="submit" class="w-full py-3 text-center text-white bg-green-600 rounded-lg">LOGIN</button>

                        <div class="pt-6 mt-12 text-sm text-center border-t border-gray-200">Belum punya akun? <a href="/register" class="font-bold">Daftar Sekarang</a></div>

                        </div>

                    </form>

                </div>
            </div>
        
        </div>
    </div>
</x-guest-layout>
