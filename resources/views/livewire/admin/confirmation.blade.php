<div x-data="{ filters: false }">

    <!-- Page Heading -->
    <header class="">
        <div class="px-4 pt-6 pb-2 mx-auto lg:flex lg:items-center lg:justify-between max-w-7xl sm:px-6 lg:px-8">
            <div class="flex lg:block">
                <div class="flex items-center text-xs">
                    PPDB 2020
                    <span class="mx-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="4.961" height="8.922" viewBox="0 0 4.961 8.922">
                            <path id="Path_108" data-name="Path 108" d="M9,5l3.754,3.754L9,12.508" transform="translate(-8.293 -4.293)" fill="none" stroke="#737a87" stroke-linecap="round" stroke-linejoin="round" stroke-width="1"/>
                        </svg>
                    </span>
                    PANITIA
                    <span class="mx-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="4.961" height="8.922" viewBox="0 0 4.961 8.922">
                            <path id="Path_108" data-name="Path 108" d="M9,5l3.754,3.754L9,12.508" transform="translate(-8.293 -4.293)" fill="none" stroke="#737a87" stroke-linecap="round" stroke-linejoin="round" stroke-width="1"/>
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
                        <input 
                            wire:model="search"
                            type="search" 
                            id="search" 
                            placeholder="Search"
                            class="w-full py-2 pl-8 pr-3 text-sm placeholder-gray-500 transition duration-150 ease-in-out bg-white border border-gray-300 rounded-md shadow-xl focus:outline-none focus:ring-green-500 focus:border-green-500 lg:w-64"
                        >
                        <div class="absolute top-0 flex items-center h-full ml-3">
                            <svg class="w-4 h-4 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                        </div>
                    </div>
                    <button @click="filters = ! filters" class="flex items-center px-4 py-2 pr-3 text-sm bg-white border border-gray-300 rounded-md focus:outline-none focus:ring-green-500 focus:border-green-500 focus:ring-2">
                        <svg class="w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16.974 16.974">
                            <path id="Path_73" data-name="Path 73" d="M3,3.832A.832.832,0,0,1,3.832,3h13.31a.832.832,0,0,1,.832.832V5.983a.832.832,0,0,1-.244.588l-5.336,5.336a.832.832,0,0,0-.244.588v2.151L8.823,17.974V12.495a.832.832,0,0,0-.244-.588L3.244,6.571A.832.832,0,0,1,3,5.983Z" transform="translate(-2 -2)" fill="none" stroke="#9198a1" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/>
                        </svg>
                        Filters
                    </button>
                </div>
                <div class="flex items-center justify-end mt-4 space-x-2 md:mt-0">
                    <button class="flex items-center px-4 py-2 pr-3 text-sm bg-white border border-gray-300 rounded-md focus:outline-none focus:ring-green-500 focus:border-green-500 focus:ring-2">
                        <svg class="w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 18 18">
                            <path id="Path_124" data-name="Path 124" d="M4,16v1a3,3,0,0,0,3,3H17a3,3,0,0,0,3-3V16m-4-4-4,4m0,0L8,12m4,4V4" transform="translate(-3 -3)" fill="none" stroke="#9198a1" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/>
                        </svg>
                        Download
                    </button>
                    <button class="flex items-center px-4 py-2 pr-3 text-sm bg-white border border-gray-300 rounded-md focus:outline-none focus:ring-green-500 focus:border-green-500 focus:ring-2">
                        <svg class="w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 21.5 21.5">
                            <path id="Path_115" data-name="Path 115" d="M19.25,9.5v3.25m0,0V16m0-3.25H22.5m-3.25,0H16M13.833,7.333A4.333,4.333,0,1,1,9.5,3,4.333,4.333,0,0,1,13.833,7.333ZM3,21.417a6.5,6.5,0,1,1,13,0V22.5H3Z" transform="translate(-2 -2)" fill="none" stroke="#9198a1" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/>
                        </svg>
                        Tambah akun
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
                            <th scope="col" class="w-64 px-3 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase ">
                                Petugas
                            </th>
                            <th scope="col" class="px-3 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                                Status
                            </th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            @foreach ($payments as $item)
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
                            <td class="px-3 py-4 whitespace-nowrap">
                                <div class="text-sm text-gray-900">Rp. {{ $item->amount }},- </div>
                                <div class="text-sm text-gray-500">{{ $item->created_at }}</div>
                            </td>
                            <td class="py-4 pl-6 whitespace-nowrap">
                                <a href="/storage/{{ $item->attachment }}" target="_blank">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="18.915" height="20"><path data-name="Path 138" d="M12.172 5l-6.586 6.586a2 2 0 102.828 2.828l6.414-6.586a4 4 0 10-5.656-5.656L2.757 8.757a6 6 0 008.486 8.486L17.5 11" fill="none" stroke="#707070" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/></svg>
                                </a>
                            </td>
                            <td class="px-3 py-4 whitespace-nowrap">
                                {{ $item->verified_by }}
                            </td>
                            <td class="px-3 py-4 whitespace-nowrap">
                                Verifikasi Sekarang
                                
                            </td>
                            </tr>

                            @endforeach
                            
                            <!-- More rows... -->
                        </tbody>
                        </table>
                    </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

</div>
