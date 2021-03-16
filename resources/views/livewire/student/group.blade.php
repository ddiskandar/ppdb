<div>
    <div class="py-10 mx-auto max-w-7xl sm:px-6 lg:px-8">
        <x-action-section>

            <x-slot name="title">
                {{ __('Gabung Grup')}}
            </x-slot>

            <x-slot name="description">
                {{ __('Segera bergabung dengan menggunakan link untuk Info PPDB lainnya')}}
            </x-slot>

            <x-slot name="content">

                <x-form successMessage="{{ $successMessage }}" submit="submitForm">
                    <x-slot name="form">

                        <div class="col-span-6 sm:col-span-4">
                            <div class="mt-6">
                                <a wire:click="gabung" class="px-6 py-3 text-white bg-green-600 rounded-md hover:bg-green-500" href="https://chat.whatsapp.com/GBq6KDPq1MBDYDSKGtr67O" target="_blank">Klik disini untuk bergabung</a>
                            </div>

                        </div>

                        <div class="col-span-6 sm:col-span-4">
                            <x-label for="ppdb.join_wa" value="{{ __('Sudah gabung ke group WA ?') }}" />

                            <x-select wire:model.defer="ppdb.join_wa" id="ppdb.join_wa" name="ppdb.join_wa" class="block w-full px-3 mt-1">

                                <option value="0" {{ ($ppdb->join_wa == false ) ? 'selected':'' }}>{{ __('Belum, saya belum gabung') }}</option>
                                <option value="1" {{ ($ppdb->join_wa == true ) ? 'selected':'' }}>{{ __('Iya, Saya sudah gabung') }}</option>

                            </x-select>

                            <x-input-error for="pilihan_satu" class="mt-2" />
                        </div>

                    </x-slot>
                    <x-slot name="actions">
                        <x-button-submit target="submitForm" class="py-2 bg-green-600 hover:bg-green-700 focus:ring-green-500">
                            {{ __('Simpan') }}
                        </x-button-submit>
                    </x-slot>
                </x-form>

            </x-slot>

        </x-action-section>
    </div> {{-- end of  --}}
</div>