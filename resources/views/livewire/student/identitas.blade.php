<div>

    <div class="pt-12 pb-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
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
    </div>

    <div class="pb-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="mt-4">
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
                                            <label for="panggilan" class="block text-sm font-medium text-gray-700">panggilan</label>
                                            <input wire:model.lazy="panggilan" type="text" name="panggilan" id="panggilan" autocomplete="panggilan" class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500 sm:text-sm">
                                            @error('panggilan') <div class="mt-2 text-sm text-red-600">{{ $message }}</div> @enderror
                                        </div>

                                        <div class="col-span-6 sm:col-span-1">
                                            <label for="jk" class="block text-sm font-medium text-gray-700">jk</label>
                                            <input wire:model.lazy="jk" type="text" name="jk" id="jk" autocomplete="jk" class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500 sm:text-sm">
                                            @error('jk') <div class="mt-2 text-sm text-red-600">{{ $message }}</div> @enderror
                                        </div>

                                        <div class="col-span-6 sm:col-span-2">
                                            <label for="nisn" class="block text-sm font-medium text-gray-700">NISN</label>
                                            <input wire:model.lazy="nisn" type="text" name="nisn" id="nisn" autocomplete="nisn" maxlength="8" class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500 sm:text-sm">
                                            @error('nisn') <div class="mt-2 text-sm text-red-600">{{ $message }}</div> @enderror
                                        </div>

                                        <div class="col-span-6 sm:col-span-2">
                                            <label for="nik" class="block text-sm font-medium text-gray-700">NIK</label>
                                            <input wire:model.lazy="nik" type="text" name="nik" id="nik" autocomplete="nik" maxlength="16" class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500 sm:text-sm">
                                            @error('nik') <div class="mt-2 text-sm text-red-600">{{ $message }}</div> @enderror
                                        </div>

                                        <div class="col-span-6 sm:col-span-2">
                                            <label for="akta" class="block text-sm font-medium text-gray-700">akta</label>
                                            <input wire:model.lazy="akta" type="text" name="akta" id="akta" autocomplete="akta" maxlength="16" class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500 sm:text-sm">
                                            @error('akta') <div class="mt-2 text-sm text-red-600">{{ $message }}</div> @enderror
                                        </div>

                                        <div class="col-span-6 sm:col-span-3">
                                            <label for="birthplace" class="block text-sm font-medium text-gray-700">birthplace</label>
                                            <input wire:model.lazy="birthplace" type="text" name="birthplace" id="birthplace" autocomplete="birthplace" maxlength="16" class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500 sm:text-sm">
                                            @error('birthplace') <div class="mt-2 text-sm text-red-600">{{ $message }}</div> @enderror
                                        </div>

                                        <div class="col-span-6 sm:col-span-2">
                                            <label for="birthdate" class="block text-sm font-medium text-gray-700">birthdate</label>
                                            <input wire:model.lazy="birthdate" type="date" name="birthdate" id="birthdate" placeholder="dd-mm-yyyy" autocomplete="birthdate" class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500 sm:text-sm">
                                            @error('birthdate') <div class="mt-2 text-sm text-red-600">{{ $message }}</div> @enderror
                                        </div>

                                        <div class="col-span-6 sm:col-span-2">
                                            <label for="phone" class="block text-sm font-medium text-gray-700">Phone</label>
                                            <input wire:model.lazy="phone" type="text" name="phone" id="phone" autocomplete="family-name" maxlength="13" class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500 sm:text-sm">
                                            @error('phone') <div class="mt-2 text-sm text-red-600">{{ $message }}</div> @enderror
                                        </div>

                                        <div class="col-span-6 sm:col-span-2">
                                            <label for="agama_id" class="block text-sm font-medium text-gray-700">agama_id</label>
                                            <input wire:model.lazy="agama_id" type="text" name="agama_id" id="agama_id" autocomplete="agama_id" maxlength="16" class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500 sm:text-sm">
                                            @error('agama_id') <div class="mt-2 text-sm text-red-600">{{ $message }}</div> @enderror
                                        </div>

                                        <div class="col-span-6 sm:col-span-4">
                                            <label for="address" class="block text-sm font-medium text-gray-700">address</label>
                                            <input wire:model.lazy="address" type="text" name="address" id="address" autocomplete="address" maxlength="16" class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500 sm:text-sm">
                                            @error('address') <div class="mt-2 text-sm text-red-600">{{ $message }}</div> @enderror
                                        </div>

                                        <div class="col-span-6 sm:col-span-1">
                                            <label for="rt" class="block text-sm font-medium text-gray-700">rt</label>
                                            <input wire:model.lazy="rt" type="text" name="rt" id="rt" autocomplete="rt" maxlength="16" class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500 sm:text-sm">
                                            @error('rt') <div class="mt-2 text-sm text-red-600">{{ $message }}</div> @enderror
                                        </div>

                                        <div class="col-span-6 sm:col-span-1">
                                            <label for="rw" class="block text-sm font-medium text-gray-700">rw</label>
                                            <input wire:model.lazy="rw" type="text" name="rw" id="rw" autocomplete="rw" maxlength="16" class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500 sm:text-sm">
                                            @error('rw') <div class="mt-2 text-sm text-red-600">{{ $message }}</div> @enderror
                                        </div>

                                        <div class="col-span-6 sm:col-span-2">
                                            <label for="desa" class="block text-sm font-medium text-gray-700">desa</label>
                                            <input wire:model.lazy="desa" type="text" name="desa" id="desa" autocomplete="desa" maxlength="16" class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500 sm:text-sm">
                                            @error('desa') <div class="mt-2 text-sm text-red-600">{{ $message }}</div> @enderror
                                        </div>

                                        <div class="col-span-6 sm:col-span-2">
                                            <label for="kecamatan" class="block text-sm font-medium text-gray-700">kecamatan</label>
                                            <input wire:model.lazy="kecamatan" type="text" name="kecamatan" id="kecamatan" autocomplete="kecamatan" maxlength="16" class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500 sm:text-sm">
                                            @error('kecamatan') <div class="mt-2 text-sm text-red-600">{{ $message }}</div> @enderror
                                        </div>

                                        <div class="col-span-6 sm:col-span-2">
                                            <label for="kab" class="block text-sm font-medium text-gray-700">kab</label>
                                            <input wire:model.lazy="kab" type="text" name="kab" id="kab" autocomplete="kab" maxlength="16" class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500 sm:text-sm">
                                            @error('kab') <div class="mt-2 text-sm text-red-600">{{ $message }}</div> @enderror
                                        </div>

                                        <div class="col-span-6 sm:col-span-2">
                                            <label for="prov" class="block text-sm font-medium text-gray-700">prov</label>
                                            <input wire:model.lazy="prov" type="text" name="prov" id="prov" autocomplete="prov" maxlength="16" class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500 sm:text-sm">
                                            @error('prov') <div class="mt-2 text-sm text-red-600">{{ $message }}</div> @enderror
                                        </div>

                                        <div class="col-span-6 sm:col-span-2">
                                            <label for="kode_pos" class="block text-sm font-medium text-gray-700">kode_pos</label>
                                            <input wire:model.lazy="kode_pos" type="text" name="kode_pos" id="kode_pos" autocomplete="kode_pos" maxlength="16" class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500 sm:text-sm">
                                            @error('kode_pos') <div class="mt-2 text-sm text-red-600">{{ $message }}</div> @enderror
                                        </div>

                                        

                                        

                                    </div>
                                </div>
                                <div class="px-4 py-3 text-right bg-gray-50 sm:px-6">
                                    @if ($successMessage)
                                        <span class="mr-4 text-sm">Data berhasil diperbaharui!</span>
                                    @endif
                                    <button type="submit" class="inline-flex justify-center w-24 px-4 py-2 text-sm font-medium text-white bg-green-600 border border-transparent rounded-md shadow-sm hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500">
                                        <svg wire:loading wire:target="updateIdentitas" class="w-5 h-5 -ml-1 text-white animate-spin" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                        <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                                        <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                                        </svg>
                                        <span wire:loading.remove wire:target="updateIdentitas">Simpan</span>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div> 
    </div>

</div>