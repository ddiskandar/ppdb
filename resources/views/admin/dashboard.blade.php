<x-app-layout>
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
                    {{ __('Dashboard') }}
                </h2>
            </div>

            <div class="mt-6 lg:mt-0 lg:text-right">
                <div>
                    Periode aktif
                </div>
                <div class="font-semibold">
                    Gelombang 1, 01 Januari 2020 - 30 Februari 2020
                </div>
            </div>
        </div>
    </header>

    <div class="py-4">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white">
                <div class="flex items-center px-10 py-6 bg-red-200">
                    <div>
                        <svg 
                            class="w-10 h-10 mr-4"
                        xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 43 43">
                            <path id="Path_112" data-name="Path 112" d="M35.5,16v6.5m0,0V29m0-6.5H42m-6.5,0H29M24.667,11.667A8.667,8.667,0,1,1,16,3,8.667,8.667,0,0,1,24.667,11.667ZM3,39.833a13,13,0,0,1,26,0V42H3Z" transform="translate(-1 -1)" fill="none" stroke="#a5a5a6" stroke-linecap="round" stroke-linejoin="round" stroke-width="4"/>
                        </svg>
                    </div>
                    <div>
                        <h5 class="text-xl font-bold text-red-600">Pendaftaran akun baru!</h5>
                        <p>Terdapat 2 pendaftaran belum diverifikasi</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="py-4">
        <div class="grid gap-6 mx-auto max-w-7xl sm:px-6 lg:px-8 sm:grid-cols-2 md:grid-cols-4 ">
            <x-admin-dashboard-card :value="234">
                <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 27.862 27.955">
                    <path id="Path_2" data-name="Path 2" d="M15.931,4.945a5.747,5.747,0,1,1,0,7.6m4.31,16.313H3V27.426a8.621,8.621,0,0,1,17.242,0Zm0,0h8.621V27.426a8.621,8.621,0,0,0-12.931-7.467M17.368,8.747A5.747,5.747,0,1,1,11.621,3,5.747,5.747,0,0,1,17.368,8.747Z" transform="translate(-2 -1.908)" fill="none" stroke="#9ca3af" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/>
                </svg>
            </x-admin-dashboard-card>

            <x-admin-dashboard-card :value="125">
                <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 26.863 26.863">
                <path id="Path_36" data-name="Path 36" d="M25.1,27.863V5.763A2.763,2.763,0,0,0,22.338,3H8.525A2.763,2.763,0,0,0,5.763,5.763v22.1m19.338,0h2.763m-2.763,0H18.194m-12.431,0H3m2.763,0h6.906M11.288,8.525h1.381M11.288,14.05h1.381m5.525-5.525h1.381M18.194,14.05h1.381M12.669,27.863V20.956a1.381,1.381,0,0,1,1.381-1.381h2.763a1.381,1.381,0,0,1,1.381,1.381v6.906m-5.525,0h5.525" transform="translate(-2 -2)" fill="none" stroke="#9ca3af" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/>
                </svg>

            </x-admin-dashboard-card>
            <x-admin-dashboard-card :value="234">
                <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 27.862 27.955">
                    <path id="Path_2" data-name="Path 2" d="M15.931,4.945a5.747,5.747,0,1,1,0,7.6m4.31,16.313H3V27.426a8.621,8.621,0,0,1,17.242,0Zm0,0h8.621V27.426a8.621,8.621,0,0,0-12.931-7.467M17.368,8.747A5.747,5.747,0,1,1,11.621,3,5.747,5.747,0,0,1,17.368,8.747Z" transform="translate(-2 -1.908)" fill="none" stroke="#9ca3af" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/>
                </svg>
            </x-admin-dashboard-card>

            <x-admin-dashboard-card :value="125">
                <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 26.863 26.863">
                <path id="Path_36" data-name="Path 36" d="M25.1,27.863V5.763A2.763,2.763,0,0,0,22.338,3H8.525A2.763,2.763,0,0,0,5.763,5.763v22.1m19.338,0h2.763m-2.763,0H18.194m-12.431,0H3m2.763,0h6.906M11.288,8.525h1.381M11.288,14.05h1.381m5.525-5.525h1.381M18.194,14.05h1.381M12.669,27.863V20.956a1.381,1.381,0,0,1,1.381-1.381h2.763a1.381,1.381,0,0,1,1.381,1.381v6.906m-5.525,0h5.525" transform="translate(-2 -2)" fill="none" stroke="#9ca3af" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/>
                </svg>

            </x-admin-dashboard-card>

        </div>
    </div>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    You're logged in!
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
