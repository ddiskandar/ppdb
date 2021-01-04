<div>

    <div class="pt-12 mx-auto max-w-7xl sm:px-6 lg:px-8">
        <div class="md:grid md:grid-cols-3 md:gap-6">
            <div class="md:col-span-1">
            <div class="px-4 sm:px-0">
                <h3 class="text-lg font-medium leading-6 text-gray-900">Photo</h3>
                <p class="mt-1 text-sm text-gray-600">
                    Mengenakan seragam asal sekolah
                </p>
            </div>
            </div>

            <div class="mt-5 md:mt-0 md:col-span-2">
            <form action="#" method="POST">
                <div class="shadow sm:rounded-md sm:overflow-hidden">
                <div class="px-4 py-5 space-y-6 bg-white sm:p-6">
                    <div class="mt-2 w">
                        <div class="inline-block w-48 h-56 overflow-hidden rounded-md">
                            <img class="bg-center"
                                src="{{ Auth::user()->photo }}"
                                alt="{{ Auth::user()->username }} photo"
                                >
                        </div>
                        
                        <div class="mt-4">
                            <label for="file-upload" class="px-3 py-2 text-sm font-medium leading-4 text-gray-700 bg-white border border-gray-300 rounded-md shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                            <span>Upload a file</span>
                            <input wire:model="photo" id="file-upload" name="file-upload" type="file" class="sr-only">
                            </label>

                            <span wire:loading wire:target="photo">
                                <svg class="inline-block w-5 h-5 ml-4 text-gray-300 animate-spin" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                    <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                                    <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                                </svg>
                            </span>
                        </div>
                    </div>
                </div>
                </div>
            </form>
            </div>
        </div>

        <x-section-border />
        
    </div>

    <div class="">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="md:grid md:grid-cols-3 md:gap-6">
                <div class="md:col-span-1">
                    <div class="px-4 sm:px-0">
                        <h3 class="text-lg font-medium leading-6 text-gray-900">Data Peserta Didik</h3>
                        <p class="mt-1 text-sm text-gray-600">
                            Siapkan dokumen untuk mengisi
                        </p>
                    </div>
                </div>

                <div class="mt-5 md:mt-0 md:col-span-2">
                    <form wire:submit.prevent="updateIdentitas" action="#" method="POST">
                        <div class="overflow-hidden shadow sm:rounded-md">
                            <div class="px-4 py-5 bg-white sm:p-6">
                                <div class="grid grid-cols-6 gap-6">
                                    <div class="col-span-6 sm:col-span-4">
                                        <x-label for="name" value="{{ __('Nama Lengkap') }}" />
                                        <x-input wire:model.lazy="name" id="name" type="text" class="block w-full mt-1"/>
                                        <x-input-error for="name" class="mt-2" />
                                    </div>

                                    <div class="col-span-6 sm:col-span-3">
                                        <x-label for="panggilan" value="{{ __('Panggilan') }}" />
                                        <x-input wire:model.lazy="panggilan" id="panggilan" type="text" class="block w-full mt-1"/>
                                        <x-input-error for="panggilan" class="mt-2" />
                                    </div>

                                    <div class="col-span-6 sm:col-span-3">
                                        <x-label for="jk" value="{{ __('Jenis Kelamin') }}" />
                                        <x-input wire:model.lazy="jk" id="jk" type="text" class="block w-full mt-1"/>
                                        <x-input-error for="jk" class="mt-2" />
                                    </div>

                                    <div class="col-span-6 sm:col-span-3">
                                        <x-label for="nisn" value="{{ __('NISN') }}" />
                                        <x-input wire:model.lazy="nisn" id="nisn" type="text" class="block w-full mt-1"/>
                                        <x-input-error for="nisn" class="mt-2" />
                                    </div>

                                    <div class="col-span-6 sm:col-span-3">
                                        <x-label for="nik" value="{{ __('Nomor Induk Kependudukan') }}" />
                                        <x-input wire:model.lazy="nik" id="nik" type="text" class="block w-full mt-1"/>
                                        <x-input-error for="nik" class="mt-2" />
                                    </div>

                                    <div class="col-span-6 sm:col-span-3">
                                        <x-label for="akta" value="{{ __('Nomor Reg Akta Kelahiran') }}" />
                                        <x-input wire:model.lazy="akta" id="akta" type="text" class="block w-full mt-1"/>
                                        <x-input-error for="akta" class="mt-2" />
                                    </div>

                                    <div class="col-span-6 sm:col-span-3">
                                        <x-label for="birthplace" value="{{ __('Tempat Lahir') }}" />
                                        <x-input wire:model.lazy="birthplace" id="birthplace" type="text" class="block w-full mt-1"/>
                                        <x-input-error for="birthplace" class="mt-2" />
                                    </div>

                                    <div class="col-span-6 sm:col-span-3">
                                        <x-label for="birthdate" value="{{ __('Tanggal Lahir') }}" />
                                        <x-input wire:model.lazy="birthdate" id="birthdate" type="date" class="block w-full mt-1"/>
                                        <x-input-error for="birthdate" class="mt-2" />
                                    </div>

                                    <div class="col-span-6 sm:col-span-3">
                                        <x-label for="phone" value="{{ __('Handphone') }}" />
                                        <x-input wire:model.lazy="phone" id="phone" type="text" class="block w-full mt-1"/>
                                        <x-input-error for="phone" class="mt-2" />
                                    </div>

                                    <div class="col-span-6 sm:col-span-3">
                                        <x-label for="agama_id" value="{{ __('Agama') }}" />
                                        <x-input wire:model.lazy="agama_id" id="agama_id" type="text" class="block w-full mt-1"/>
                                        <x-input-error for="agama_id" class="mt-2" />
                                    </div>

                                    <div class="col-span-6 sm:col-span-3">
                                        <x-label for="address" value="{{ __('Alamat Kampung / Jalan') }}" />
                                        <x-input wire:model.lazy="address" id="address" type="text" class="block w-full mt-1"/>
                                        <x-input-error for="address" class="mt-2" />
                                    </div>

                                    <div class="col-span-6 sm:col-span-3">
                                        <x-label for="rt" value="{{ __('RT') }}" />
                                        <x-input wire:model.lazy="rt" id="rt" type="text" class="block w-full mt-1"/>
                                        <x-input-error for="rt" class="mt-2" />
                                    </div>

                                    <div class="col-span-6 sm:col-span-3">
                                        <x-label for="rw" value="{{ __('RW') }}" />
                                        <x-input wire:model.lazy="rw" id="rw" type="text" class="block w-full mt-1"/>
                                        <x-input-error for="rw" class="mt-2" />
                                    </div>

                                    <div class="col-span-6 sm:col-span-3">
                                        <x-label for="desa" value="{{ __('Desa') }}" />
                                        <x-input wire:model.lazy="desa" id="desa" type="text" class="block w-full mt-1"/>
                                        <x-input-error for="desa" class="mt-2" />
                                    </div>

                                    <div class="col-span-6 sm:col-span-3">
                                        <x-label for="kecamatan" value="{{ __('Kecamatan') }}" />
                                        <x-input wire:model.lazy="kecamatan" id="kecamatan" type="text" class="block w-full mt-1"/>
                                        <x-input-error for="kecamatan" class="mt-2" />
                                    </div>

                                    <div class="col-span-6 sm:col-span-3">
                                        <x-label for="kab" value="{{ __('Kabupaten') }}" />
                                        <x-input wire:model.lazy="kab" id="kab" type="text" class="block w-full mt-1"/>
                                        <x-input-error for="kab" class="mt-2" />
                                    </div>

                                    <div class="col-span-6 sm:col-span-3">
                                        <x-label for="prov" value="{{ __('Provinsi') }}" />
                                        <x-input wire:model.lazy="prov" id="prov" type="text" class="block w-full mt-1"/>
                                        <x-input-error for="prov" class="mt-2" />
                                    </div>

                                    <div class="col-span-6 sm:col-span-3">
                                        <x-label for="kode_pos" value="{{ __('Kode Pos') }}" />
                                        <x-input wire:model.lazy="kode_pos" id="kode_pos" type="text" class="block w-full mt-1"/>
                                        <x-input-error for="kode_pos" class="mt-2" />
                                    </div>

                                </div>
                            </div>
                            <div class="px-4 py-3 text-right bg-gray-50 sm:px-6">
                                @if ($successMessage)
                                    <span class="mr-4 text-sm">Data berhasil diperbaharui!</span>
                                @endif

                                <x-button-submit 
                                    target="updateIdentitas"
                                    class="py-2 bg-green-600 hover:bg-green-700 focus:ring-green-500">
                                    {{ __('Simpan') }}
                                </x-button-submit>

                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div> 
    </div>

</div>