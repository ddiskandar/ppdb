<div>

    <div class="py-12 mx-auto max-w-7xl sm:px-6 lg:px-8">
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
                        <div class="inline-block w-48 h-32 overflow-hidden @if ( ! $photo ) border-2 border-gray-200 border-dashed @endif rounded-md">
                            <img class="bg-cover" src="/storage/{{ $photo }}">
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
            <div class="mt-10">
                <div class="md:grid md:grid-cols-3 md:gap-6">
                    <div class="md:col-span-1">
                        <div class="px-4 sm:px-0">
                            <h3 class="text-lg font-medium leading-6 text-gray-900">Contact Us</h3>
                            <p class="mt-1 text-sm text-gray-600">
                            Untuk informasi dan yang lainnya.
                            </p>
                        </div>
                    </div>

                    <div class="mt-5 md:mt-0 md:col-span-2">
                        <form wire:submit.prevent="updateIdentitas" action="#" method="POST">
                            <div class="overflow-hidden shadow sm:rounded-md">
                                <div class="px-4 py-5 bg-white sm:p-6">
                                    <div class="grid grid-cols-6 gap-6">
                                        <div class="col-span-6 sm:col-span-3">
                                            <label for="nik" class="block text-sm font-medium text-gray-700">NIK</label>
                                            <input wire:model.lazy="nik" type="text" name="nik" id="nik" autocomplete="nik" class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500 sm:text-sm">
                                            @error('nik') <div class="mt-2 text-sm text-red-600">{{ $message }}</div> @enderror
                                        </div>

                                        <div class="col-span-6 sm:col-span-4">
                                            <label for="nisn" class="block text-sm font-medium text-gray-700">NISN</label>
                                            <input wire:model.lazy="nisn" type="text" name="nisn" id="nisn" autocomplete="nisn" class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500 sm:text-sm">
                                            @error('nisn') <div class="mt-2 text-sm text-red-600">{{ $message }}</div> @enderror
                                        </div>

                                        <div class="col-span-6 sm:col-span-3">
                                            <label for="phone" class="block text-sm font-medium text-gray-700">Phone</label>
                                            <input wire:model.lazy="phone" type="text" name="phone" id="phone" autocomplete="family-name" class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500 sm:text-sm">
                                            @error('phone') <div class="mt-2 text-sm text-red-600">{{ $message }}</div> @enderror
                                        </div>

                                        <div class="col-span-6">
                                            <label for="address" class="block text-sm font-medium text-gray-700">
                                                Alamat
                                            </label>
                                            <div class="mt-1">
                                                <textarea wire:model.lazy="address" id="address" name="address" rows="3" class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500 sm:text-sm"></textarea>
                                                @error('address') <div class="mt-2 text-sm text-red-600">{{ $message }}</div> @enderror
                                            </div>
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


