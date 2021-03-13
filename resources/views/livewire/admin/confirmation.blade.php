<div x-data="{ filters: false, slide: false }">

    <!-- Page Heading -->
    <header class="">
        <div class="px-4 pt-6 pb-2 mx-auto lg:flex lg:items-center lg:justify-between max-w-7xl sm:px-6 lg:px-8">
            <div class="flex lg:block">
                <div class="flex items-center text-xs">
                    PPDB 2020
                    <span class="mx-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="4.961" height="8.922" viewBox="0 0 4.961 8.922">
                            <path id="Path_108" data-name="Path 108" d="M9,5l3.754,3.754L9,12.508" transform="translate(-8.293 -4.293)" fill="none" stroke="#737a87" stroke-linecap="round" stroke-linejoin="round" stroke-width="1" />
                        </svg>
                    </span>
                    PANITIA
                    <span class="mx-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="4.961" height="8.922" viewBox="0 0 4.961 8.922">
                            <path id="Path_108" data-name="Path 108" d="M9,5l3.754,3.754L9,12.508" transform="translate(-8.293 -4.293)" fill="none" stroke="#737a87" stroke-linecap="round" stroke-linejoin="round" stroke-width="1" />
                        </svg>
                    </span>
                </div>
                <h2 class="font-semibold leading-tight text-gray-800 lg:text-xl">
                    {{ __('Pembayaran') }}
                </h2>
            </div>

            <div class="mt-6 lg:mt-0 md:items-center md:space-x-2 md:flex">
                <div class="flex items-center flex-1 space-x-2">
                    <div class="relative flex-1">
                        <input wire:model="search" type="search" id="search" placeholder="Search" class="w-full py-2 pl-8 pr-3 text-sm placeholder-gray-500 transition duration-150 ease-in-out bg-white border border-gray-300 rounded-md shadow-xl focus:outline-none focus:ring-green-500 focus:border-green-500 lg:w-64">
                        <div class="absolute top-0 flex items-center h-full ml-3">
                            <svg class="w-4 h-4 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                            </svg>
                        </div>
                    </div>
                    <button @click="filters = ! filters" class="flex items-center px-4 py-2 pr-3 text-sm bg-white border border-gray-300 rounded-md focus:outline-none focus:ring-green-500 focus:border-green-500 focus:ring-2">
                        <svg class="w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16.974 16.974">
                            <path id="Path_73" data-name="Path 73" d="M3,3.832A.832.832,0,0,1,3.832,3h13.31a.832.832,0,0,1,.832.832V5.983a.832.832,0,0,1-.244.588l-5.336,5.336a.832.832,0,0,0-.244.588v2.151L8.823,17.974V12.495a.832.832,0,0,0-.244-.588L3.244,6.571A.832.832,0,0,1,3,5.983Z" transform="translate(-2 -2)" fill="none" stroke="#9198a1" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                        </svg>
                        Filters
                    </button>
                </div>
                <div class="flex items-center justify-end mt-4 space-x-2 md:mt-0">
                    <button class="flex items-center px-4 py-2 pr-3 text-sm bg-white border border-gray-300 rounded-md focus:outline-none focus:ring-green-500 focus:border-green-500 focus:ring-2" @click="slide = ! slide" wire:click="newPayment">
                        <svg class="w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 21.5 21.5">
                            <path id="Path_115" data-name="Path 115" d="M19.25,9.5v3.25m0,0V16m0-3.25H22.5m-3.25,0H16M13.833,7.333A4.333,4.333,0,1,1,9.5,3,4.333,4.333,0,0,1,13.833,7.333ZM3,21.417a6.5,6.5,0,1,1,13,0V22.5H3Z" transform="translate(-2 -2)" fill="none" stroke="#9198a1" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                        </svg>
                        Tambah Pembayaran
                    </button>
                </div>
            </div>
        </div>
    </header>

    <div class="py-4">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <!-- This example requires Tailwind CSS v2.0+ -->
            <div class="flex flex-col mb-4">
                <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                    <div class="inline-block min-w-full py-2 align-middle sm:px-6 lg:px-8">
                        <div class="overflow-hidden border-b border-gray-200 shadow sm:rounded-lg">
                            <table class="min-w-full divide-y divide-gray-200">
                                <thead class="bg-gray-50">
                                    <tr>
                                        <th scope="col" class="px-3 py-3 pl-6 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                                            Nama
                                        </th>
                                        <th scope="col" class="px-3 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                                            Pembayaran
                                        </th>
                                        <th scope="col" class="px-3 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                                            Bukti
                                        </th>
                                        <th scope="col" class="px-3 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                                            Status
                                        </th>
                                        <th scope="col" class="px-3 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase ">
                                            Petugas
                                        </th>
                                        <th scope="col" class="px-3 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase ">
                                            Catatan
                                        </th>

                                    </tr>
                                </thead>
                                <tbody class="bg-white divide-y divide-gray-200">
                                    @forelse ($payments as $item)
                                    <tr>
                                        <td class="px-3 py-4 pl-6 whitespace-nowrap">
                                            <div class="flex items-center">
                                                <div class="flex-shrink-0 w-10 h-10">
                                                    <img class="w-10 h-10 rounded-full" src="/images/default-photo.png" alt="">
                                                </div>
                                                <div class="ml-4">
                                                    <div class="inline-flex text-sm font-medium text-gray-900 item-center">
                                                        <span>
                                                            {{ $item->student->user->name }}
                                                        </span>

                                                    </div>
                                                    <div class="text-sm text-gray-500">
                                                        {{ $item->student->user->username }}
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td @click="slide = true" wire:click="verify({{ $item->id }})" class="px-3 py-4 cursor-pointer whitespace-nowrap">
                                            <div class="text-sm text-gray-900">Rp. {{ $item->amount }},- </div>
                                            <div class="text-sm text-gray-500">{{ $item->date() }}</div>
                                        </td>
                                        <td class="py-4 pl-6 whitespace-nowrap">
                                            @if (isset($item->attachment))
                                            <a href="/storage/{{ $item->attachment }}" target="_blank">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="18.915" height="20">
                                                    <path data-name="Path 138" d="M12.172 5l-6.586 6.586a2 2 0 102.828 2.828l6.414-6.586a4 4 0 10-5.656-5.656L2.757 8.757a6 6 0 008.486 8.486L17.5 11" fill="none" stroke="#707070" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                                                </svg>
                                            </a>
                                            @else
                                            -
                                            @endif

                                        </td>
                                        @if ($item->verified_by)
                                        <td class="px-3 py-4 text-green-500 whitespace-nowrap">
                                            <span class="inline-flex px-2 text-xs font-semibold leading-5 text-green-800 bg-green-100 rounded-full">
                                                Verified
                                            </span>
                                        </td>
                                        @else
                                        <td @click="slide = true" wire:click="verify({{ $item->id }})" class="px-3 py-4 font-semibold text-red-600 cursor-pointer whitespace-nowrap">
                                            Verifikasi Sekarang
                                        </td>
                                        @endif
                                        <td class="px-3 py-4 whitespace-nowrap">
                                            <span class="text-sm text-gray-900">{{ $item->verificator->name ?? '-' }} </span>

                                        </td>
                                        <td class="px-3 py-4 whitespace-nowrap">
                                            <span class="text-sm text-gray-900">{{ $item->note ?? '-' }}</span>

                                        </td>


                                    </tr>

                                    @empty
                                    <tr>Kosong</tr>

                                    @endforelse

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <x-slide-overs>
                <div class="px-4 my-6 sm:px-10">
                    <form @if($verifyMode) wire:submit.prevent="updatePayment({{ $item->id }})" @else wire:submit.prevent="addPayment()" @endif action="#">

                        <h3 class="text-lg font-medium leading-6 text-gray-900" id="headline">
                            {{ $verifyMode ? $name : 'Tambah Pembayaran'}}
                        </h3>
                        <div class="mt-2">
                            @if($verifyMode)
                            <p class="text-sm text-gray-500">
                                {{ $username }}
                            </p>
                            @endif

                            @if(! $verifyMode)
                            <!-- Asal Sekolah -->
                            <div class="mt-4">
                                <x-label for="student_id" :value="__('Nama Siswa Pendaftar')" />

                                <select wire:model.defer="student_id" id="student_id" name="student_id" class="block w-full mt-1 bg-white border border-gray-300 rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 " required>
                                    <option value="">{{ __('-- Pilih salah satu') }}</option>
                                    @foreach ($students as $student)
                                    @if ( $student->bayar() < 150000 ) <option value={{ $student->id }}>{{ $student->user->name . ' (' . $student->user->username . ')' }}</option>
                                        @endif
                                        @endforeach

                                </select>

                            </div>

                            <!-- Besar Pembayaran -->
                            <div class="mt-4">
                                <x-label for="payment_amount" :value="__('Tarif Biaya Registrasi PPDB')" />

                                <x-input wire:model.defer="payment_amount" id="payment_amount" class="block w-full mt-1" type="text" name="payment_amount" :value="old('payment_amount')" />
                            </div>
                            @endif

                            <!-- Tanggal Pembayaran -->
                            <div class="mt-4">
                                <x-label for="date" :value="__('Tanggal Pembayaran')" />

                                <x-input wire:model.defer="date" id="date" class="block w-full mt-1" type="date" name="date" />
                            </div>

                            <!-- Besar Pembayaran -->
                            <div class="mt-4">
                                <x-label for="amount" :value="__('Besar Pembayaran')" />

                                <x-input wire:model.defer="amount" id="amount" class="block w-full mt-1" type="text" name="amount" :value="old('amount')" />
                            </div>

                            <!-- Catatan -->
                            <div class="mt-4">
                                <x-label for="note" :value="__('Catatan')" />

                                <x-textarea wire:model.defer="note" id="note" class="block w-full mt-1" type="text" name="note" :value="old('note')"></x-textarea>
                            </div>

                            <div class="mt-4">
                                <button @click="slide = ! slide" type="submit" class="inline-flex justify-center w-full py-2 text-base font-medium text-white bg-green-600 border border-transparent rounded-md shadow-sm hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500">
                                    Simpan
                                </button>
                            </div>

                        </div>

                    </form>
                </div>

            </x-slide-overs>

        </div>
    </div>

</div>