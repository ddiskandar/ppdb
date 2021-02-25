<div x-data="{ filters: false, slide: false, modal: false }">

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
                    {{ __('Pendaftaran') }}
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
                    <button class="flex items-center px-4 py-2 pr-3 text-sm bg-white border border-gray-300 rounded-md focus:outline-none focus:ring-green-500 focus:border-green-500 focus:ring-2">
                        <svg class="w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 18 18">
                            <path id="Path_124" data-name="Path 124" d="M4,16v1a3,3,0,0,0,3,3H17a3,3,0,0,0,3-3V16m-4-4-4,4m0,0L8,12m4,4V4" transform="translate(-3 -3)" fill="none" stroke="#9198a1" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                        </svg>
                        Download
                    </button>
                    <button class="flex items-center px-4 py-2 pr-3 text-sm bg-white border border-gray-300 rounded-md focus:outline-none focus:ring-green-500 focus:border-green-500 focus:ring-2">
                        <svg class="w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 21.5 21.5">
                            <path id="Path_115" data-name="Path 115" d="M19.25,9.5v3.25m0,0V16m0-3.25H22.5m-3.25,0H16M13.833,7.333A4.333,4.333,0,1,1,9.5,3,4.333,4.333,0,0,1,13.833,7.333ZM3,21.417a6.5,6.5,0,1,1,13,0V22.5H3Z" transform="translate(-2 -2)" fill="none" stroke="#9198a1" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                        </svg>
                        Tambah akun
                    </button>
                </div>
            </div>
        </div>
    </header>

    <div :class="{'block': filters, 'hidden': ! filters}" class="py-2">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="mt-4 lg:mt-0">
                <div class="">
                    <div class="">
                        <form action="#" method="POST">
                            <div class="overflow-hidden shadow sm:rounded-md">
                                <div class="px-4 py-5 bg-white sm:p-6">
                                    <div class="grid grid-cols-6 gap-6 lg:gap-12">
                                        <div class="col-span-6 lg:col-span-4">
                                            <div class="grid grid-cols-6 gap-6">
                                                <div class="col-span-6 sm:col-span-2">
                                                    <label for="country" class="block text-sm font-medium text-gray-700">Pendaftaran</label>
                                                    <select id="country" name="country" autocomplete="country" class="block w-full px-3 py-2 mt-1 bg-white border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-green-500 focus:border-green-500 sm:text-sm">
                                                        <option>Semua</option>
                                                        <option>Approved</option>
                                                        <option>Rejected</option>
                                                    </select>
                                                </div>

                                                <div class="col-span-6 sm:col-span-2">
                                                    <label for="country" class="block text-sm font-medium text-gray-700">Pembayaran</label>
                                                    <select id="country" name="country" autocomplete="country" class="block w-full px-3 py-2 mt-1 bg-white border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-green-500 focus:border-green-500 sm:text-sm">
                                                        <option>Semua</option>
                                                        <option>Lunas</option>
                                                        <option>Belum lunas</option>
                                                    </select>
                                                </div>

                                                <div class="col-span-6 sm:col-span-2">
                                                    <label for="country" class="block text-sm font-medium text-gray-700">Jalur</label>
                                                    <select id="country" name="country" autocomplete="country" class="block w-full px-3 py-2 mt-1 bg-white border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-green-500 focus:border-green-500 sm:text-sm">
                                                        <option>Semua</option>
                                                        <option>Gelombang 1</option>
                                                        <option>Gelombang 2</option>
                                                        <option>Gelombang 3</option>
                                                    </select>
                                                </div>

                                                <div class="col-span-6 sm:col-span-4">
                                                    <label for="country" class="block text-sm font-medium text-gray-700">Asal sekolah</label>
                                                    <select wire:model="filterSchool" id="country" name="country" autocomplete="country" class="block w-full px-3 py-2 mt-1 bg-white border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-green-500 focus:border-green-500 sm:text-sm">

                                                        <option value=''>Semua</option>
                                                        @foreach ($schools as $item)
                                                        <option value="{{ $item->name}}">{{ $item->name}}</option>
                                                        @endforeach

                                                    </select>
                                                </div>

                                                <div class="col-span-6 sm:col-span-2">
                                                    <label for="country" class="block text-sm font-medium text-gray-700">Pilihan jurusan</label>
                                                    <select id="country" name="country" autocomplete="country" class="block w-full px-3 py-2 mt-1 bg-white border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-green-500 focus:border-green-500 sm:text-sm">
                                                        <option>Semua</option>
                                                        <option>Multimedia</option>
                                                        <option>Bisnis Daring dan Pemasaran</option>
                                                        <option>Agribisnis Pengolahan Hasil Pertanian</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-span-6 lg:col-span-2">
                                            <fieldset>
                                                <legend class="block text-sm font-medium text-gray-700">Berkas</legend>
                                                <div class="grid grid-cols-6 gap-6">
                                                    <div class="col-span-3">
                                                        <div class="mt-4 space-y-4">
                                                            <div class="flex items-start">
                                                                <div class="flex items-center h-5">
                                                                    <input id="comments" name="comments" type="checkbox" class="w-4 h-4 text-indigo-600 border-gray-300 rounded focus:ring-indigo-500">
                                                                </div>
                                                                <div class="ml-3 text-sm">
                                                                    <label for="comments" class="font-medium text-gray-700">Kartu keluarga</label>
                                                                </div>
                                                            </div>
                                                            <div class="flex items-start">
                                                                <div class="flex items-center h-5">
                                                                    <input id="candidates" name="candidates" type="checkbox" class="w-4 h-4 text-indigo-600 border-gray-300 rounded focus:ring-indigo-500">
                                                                </div>
                                                                <div class="ml-3 text-sm">
                                                                    <label for="candidates" class="font-medium text-gray-700">Akta kelahiran</label>
                                                                </div>
                                                            </div>
                                                            <div class="flex items-start">
                                                                <div class="flex items-center h-5">
                                                                    <input id="offers" name="offers" type="checkbox" class="w-4 h-4 text-indigo-600 border-gray-300 rounded focus:ring-indigo-500">
                                                                </div>
                                                                <div class="ml-3 text-sm">
                                                                    <label for="offers" class="font-medium text-gray-700">Keterangan lulus</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-span-3">
                                                        <div class="mt-4 space-y-4">
                                                            <div class="flex items-start">
                                                                <div class="flex items-center h-5">
                                                                    <input id="comments" name="comments" type="checkbox" class="w-4 h-4 text-indigo-600 border-gray-300 rounded focus:ring-indigo-500">
                                                                </div>
                                                                <div class="ml-3 text-sm">
                                                                    <label for="comments" class="font-medium text-gray-700">Ijazah</label>
                                                                </div>
                                                            </div>
                                                            <div class="flex items-start">
                                                                <div class="flex items-center h-5">
                                                                    <input id="candidates" name="candidates" type="checkbox" class="w-4 h-4 text-indigo-600 border-gray-300 rounded focus:ring-indigo-500">
                                                                </div>
                                                                <div class="ml-3 text-sm">
                                                                    <label for="candidates" class="font-medium text-gray-700">PKH</label>
                                                                </div>
                                                            </div>
                                                            <div class="flex items-start">
                                                                <div class="flex items-center h-5">
                                                                    <input id="offers" name="offers" type="checkbox" class="w-4 h-4 text-indigo-600 border-gray-300 rounded focus:ring-indigo-500">
                                                                </div>
                                                                <div class="ml-3 text-sm">
                                                                    <label for="offers" class="font-medium text-gray-700">KIP</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </fieldset>
                                        </div>
                                    </div>
                                </div>
                                <div class="px-4 py-3 text-right bg-gray-50 sm:px-6">
                                    <button type="submit" class="inline-flex justify-center px-4 py-2 text-sm font-medium text-white bg-gray-900 border border-transparent rounded-md shadow-sm hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500">
                                        Update results
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

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
                                            Asal Sekolah
                                        </th>
                                        <th scope="col" class="px-3 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                                            Jalur
                                        </th>
                                        <th scope="col" class="w-48 px-3 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase ">
                                            Berkas
                                        </th>
                                        <th scope="col" class="px-3 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                                            Gabung WA
                                        </th>
                                        <th scope="col" class="px-3 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                                            Pembayaran
                                        </th>
                                        <th scope="col" class="px-3 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                                            Kelas / Tanggal Daftar
                                        </th>
                                        <th scope="col" class="relative px-3 py-3">
                                            <span class="sr-only">Edit</span>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody class="bg-white divide-y divide-gray-200">
                                    @foreach ($students as $item)
                                    <tr>

                                        <td class="px-3 py-4 pl-6 cursor-pointer whitespace-nowrap" wire:click="edit({{ $item->id }})" @click="slide = ! slide">
                                            <div class="flex items-center">
                                                <div class="flex-shrink-0 w-10 h-10">
                                                    <img class="w-10 h-10 rounded-full" src="/images/default-photo.png" alt="">
                                                </div>
                                                <div class="ml-4">
                                                    <div class="inline-flex text-sm font-medium text-gray-900 item-center">
                                                        <span>
                                                            {{ $item->user->name }}
                                                        </span>

                                                        @if ( $item->name_verified )
                                                        <svg xmlns="http://www.w3.org/2000/svg" class="ml-2" width="16" height="16" viewBox="0 0 16 16">
                                                            <path id="Path_56" data-name="Path 56" d="M6.267,3.455a3.066,3.066,0,0,0,1.745-.723,3.066,3.066,0,0,1,3.976,0,3.066,3.066,0,0,0,1.745.723,3.066,3.066,0,0,1,2.812,2.812,3.062,3.062,0,0,0,.723,1.745,3.066,3.066,0,0,1,0,3.976,3.066,3.066,0,0,0-.723,1.745,3.066,3.066,0,0,1-2.812,2.812,3.066,3.066,0,0,0-1.745.723,3.066,3.066,0,0,1-3.976,0,3.066,3.066,0,0,0-1.745-.723,3.066,3.066,0,0,1-2.812-2.812,3.066,3.066,0,0,0-.723-1.745,3.066,3.066,0,0,1,0-3.976,3.066,3.066,0,0,0,.723-1.745A3.066,3.066,0,0,1,6.267,3.455Zm7.44,5.252a1,1,0,1,0-1.414-1.414L9,10.586,7.707,9.293a1,1,0,1,0-1.414,1.414l2,2a1,1,0,0,0,1.414,0l4-4Z" transform="translate(-2 -2)" fill="#059669" fill-rule="evenodd" />
                                                        </svg>
                                                        @endif

                                                    </div>
                                                    <div class="text-sm text-gray-500">
                                                        {{ $item->user->username }}
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="px-3 py-4 whitespace-nowrap">
                                            <div class="text-sm text-gray-900">{{ $item->school->name }}</div>
                                            <div class="text-sm text-gray-500">{{ $item->school->address }}
                                            </div>
                                        </td>
                                        <td class="flex items-center px-3 py-4">
                                            @if ($item->ppdb)
                                            <div class="inline-flex flex-grow-0 px-2 mr-3 font-semibold leading-5 text-green-800 bg-gray-100 rounded-full tex-sm">
                                                {{ $item->ppdb->periode_id }}
                                            </div>

                                            @if ($item->ppdb->pilihan_satu)
                                            <div>
                                                <div class="px-2 mb-1 text-xs font-semibold leading-5 text-green-800 bg-gray-100 rounded-full">
                                                    {{ $item->pilihan_slug($item->ppdb->pilihan_satu)}}
                                                </div>

                                                <div class="px-2 mb-1 text-xs font-semibold leading-5 text-green-800 bg-gray-100 rounded-full">
                                                    {{ $item->pilihan_slug($item->ppdb->pilihan_dua)}}
                                                </div>
                                            </div>
                                            @endif

                                            @endif
                                        </td>
                                        <td class="px-3 py-4 whitespace-nowrap">
                                            <div>
                                                <span class="inline-flex px-2 text-xs font-semibold leading-5 text-green-800 rounded-full
                                        {{ ( isset($item->document->kartu_keluarga) ) ? 'bg-green-100' : 'bg-gray-100' }}
                                    ">
                                                    <a target="_blank" href="/storage/{{ $item->document->kartu_keluarga ?? '#' }}">KK</a>
                                                </span>
                                                <span class="inline-flex px-2 text-xs font-semibold leading-5 text-green-800 rounded-full
                                    {{ ( isset($item->document->akta) ) ? 'bg-green-100' : 'bg-gray-100' }}
                                    ">
                                                    <a target="_blank" href="/storage/{{ $item->document->akta ?? '#' }}">Akta</a>
                                                </span>
                                                <span class="inline-flex px-2 text-xs font-semibold leading-5 text-green-800 rounded-full 
                                    {{ ( isset($item->document->skl) ) ? 'bg-green-100' : 'bg-gray-100' }}
                                    ">
                                                    <a target="_blank" href="/storage/{{ $item->document->skl ?? '#' }}">SKL</a>
                                                </span>
                                                <span class="inline-flex px-2 text-xs font-semibold leading-5 text-green-800 rounded-full
                                    {{ ( isset($item->document->ijazah) ) ? 'bg-green-100' : 'bg-gray-100' ?? '#' }}">
                                                    Ijazah
                                                </span>
                                            </div>
                                            <div>
                                                <span class="inline-flex px-2 text-xs font-semibold leading-5 text-green-800 rounded-full
                                        {{ ( isset($item->document->kip) ) ? 'bg-green-100' : 'bg-gray-100' }}
                                    ">
                                                    <a target="_blank" href="/storage/{{ $item->document->kip ?? '#' }}">KIP</a>
                                                </span>
                                                <span class="inline-flex px-2 text-xs font-semibold leading-5 text-green-800 rounded-full
                                        {{ ( isset($item->document->pkh) ) ? 'bg-green-100' : 'bg-gray-100' }}
                                    ">
                                                    <a target="_blank" href="/storage/{{ $item->document->pkh ?? '#' }}">PKH</a>
                                                </span>
                                                <span class="inline-flex px-2 text-xs font-semibold leading-5 text-green-800 rounded-full
                                        {{ ( isset($item->document->kks) ) ? 'bg-green-100' : 'bg-gray-100' }}
                                    ">
                                                    <a target="_blank" href="/storage/{{ $item->document->kks ?? '#' }}">KKS</a>
                                                </span>
                                                <span class="inline-flex px-2 text-xs font-semibold leading-5 text-green-800 rounded-full
                                        {{ ( isset($item->document->kis) ) ? 'bg-green-100' : 'bg-gray-100' }}
                                    ">
                                                    <a target="_blank" href="/storage/{{ $item->document->kis ?? '#' }}">KIS</a>
                                                </span>
                                            </div>
                                        </td>
                                        <td class="px-3 py-4 text-sm font-medium whitespace-nowrap">
                                            @if ( isset($item->ppdb))
                                            @if ( $item->ppdb->join_wa )
                                            <svg class="ml-2" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18">
                                                <path id="Path_45" data-name="Path 45" d="M8.333,11l1.778,1.778,3.556-3.556M19,11a8,8,0,1,1-8-8A8,8,0,0,1,19,11Z" transform="translate(-2 -2)" fill="none" stroke="#059669" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                                            </svg>
                                            @else
                                            <svg class="ml-2" xmlns="http://www.w3.org/2000/svg" width="18" height="18">
                                                <path data-name="Path 130" d="M7.222 10.778L9 9m0 0l1.778-1.778M9 9L7.222 7.222M9 9l1.778 1.778M17 9a8 8 0 11-8-8 8 8 0 018 8z" fill="none" stroke="#be6060" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                                            </svg>
                                            @endif
                                            @endif
                                        </td>
                                        <td class="px-3 py-4 whitespace-nowrap">
                                            <div class="flex items-center text-sm text-gray-900">
                                                {!! ($item->is_payment_completed()) ? 'Lunas' : 'Belum Lunas' !!}
                                            </div>
                                            <div class="text-sm text-gray-500">
                                                Rp. {{ $item->bayar() }} ,-
                                            </div>
                                        </td>

                                        <td class="px-3 py-4 whitespace-nowrap">
                                            <div class="text-sm text-gray-900">5 hari yang lalu</div>
                                            <div class="text-sm text-gray-500">
                                                {{ isset($item->ppdb) ?  $item->pilihan_kelas() : '-' }}
                                            </div>
                                        </td>

                                        <td class="py-4 pr-6 text-sm font-medium text-right whitespace-nowrap">
                                            <div x-data="{ more: false }" @click.away="more= false" class="relative">
                                                <div @click="more= false">
                                                    ...
                                                </div>
                                                <div x-show="more" class="absolute left-0 w-40 py-2 mt-1 text-black bg-white rounded shadow-md">
                                                    <a class="block px-4 py-1 text-sm hover:bg-gray-200" href="#">Edit</a>
                                                    <a class="block px-4 py-1 text-sm hover:bg-gray-200" href="#">Report</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>

                                    @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <div class="px-4 sm:px-0">
                {{ $students->links() }}
            </div>

            <x-slide-overs>
                <div class="px-4 my-6 sm:px-10">
                    <img class="w-32 h-32 rounded-full" src="/images/default-photo.png" alt="">
                    <h2 id="slide-over-heading" class="mt-6 text-xl font-bold text-gray-900">
                        {{ $name }}
                    </h2>
                    <p class="text-sm">{{ $username }}</p>
                    <div class="mt-6 ">
                        <label class="block text-sm font-medium text-gray-500">
                            No. Handphone
                        </label>
                        <div>
                            {{ $phone ?? '-' }}
                        </div>
                    </div>
                    <div class="mt-6 ">
                        <label class="block text-sm font-medium text-gray-500">
                            Asal Sekolah
                        </label>
                        <div>
                            {{ $school }}
                        </div>
                    </div>
                    <div class="mt-6 ">
                        <label class="block text-sm font-medium text-gray-500">
                            Tempat, Tanggal Lahir
                        </label>
                        <div>
                            {{ $ttl ?? '-' }}
                        </div>
                    </div>
                    <div class="mt-6 ">
                        <label class="block text-sm font-medium text-gray-500">
                            Alamat
                        </label>
                        <div>
                            {{ $address ?? '-' }}
                        </div>
                    </div>
                    <div class="mt-6 ">
                        <label class="block text-sm font-medium text-gray-500">
                            Nama Ayah
                        </label>
                        <div>
                            {{ $ayah_nama ?? '-' }}
                        </div>
                    </div>
                    <div class="mt-6 ">
                        <label class="block text-sm font-medium text-gray-500">
                            Nama Ibu
                        </label>
                        <div>
                            {{ $ibu_nama ?? '-' }}
                        </div>
                    </div>
                </div>

            </x-slide-overs>

        </div>
    </div>

</div>