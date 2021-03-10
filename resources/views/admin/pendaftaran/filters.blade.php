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