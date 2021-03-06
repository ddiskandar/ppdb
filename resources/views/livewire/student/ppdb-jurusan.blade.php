<div>
    <div class="py-10 mx-auto max-w-7xl sm:px-6 lg:px-8">
        <x-action-section>

            <x-slot name="title">
                {{ __('Pilihan Jurusan')}}
            </x-slot>

            <x-slot name="description">
                {{ __('Tentukan pilihan kelas dan jurusan pertama serta kedua')}}
            </x-slot>

            <x-slot name="content">

                <x-form successMessage="{{ $successMessage }}" submit="submitForm">
                    <x-slot name="form">

                        <div class="col-span-6 sm:col-span-4">
                            <x-label for="pilihan_kelas" value="{{ __('Pilihan Kelas') }}" />

                            <x-select wire:model.defer="ppdb.pilihan_kelas" id="pilihan_kelas" name="pilihan_kelas" autocomplete="pilihan_kelas" class="block w-full px-3 mt-1">
                                <option value="1" {{ ($ppdb->pilihan_kelas === "1") ? 'selected':'' }}>
                                    {{ __('Boarding (Asrama/Pesantren)') }}
                                </option>
                                <option value="0" {{ ($ppdb->pilihan_kelas === "2") ? 'selected':'' }}>
                                    {{ __('Regular') }}
                                </option>
                            </x-select>

                            <x-input-error for="pilihan_kelas" class="mt-2" />
                        </div>

                        <div class="col-span-6 sm:col-span-4">
                            <x-label for="pilihan_satu" value="{{ __('Pilihan Jurusan Pertama') }}" />

                            <x-select wire:model.defer="ppdb.pilihan_satu" id="pilihan_satu" name="pilihan_satu" autocomplete="pilihan_satu" class="block w-full px-3 mt-1">
                                @empty($ppdb->pilihan_satu)
                                <option>{{ __('-- Pilih salah satu') }}</option>
                                @endempty
                                @foreach ($jurusans as $jurusan)
                                <option value="{{ $jurusan->id }}" {{ ($jurusan->id == $ppdb->pilihan_satu) ? 'selected':'' }}>{{ $jurusan->name }}
                                </option>
                                @endforeach
                            </x-select>

                            <x-input-error for="pilihan_satu" class="mt-2" />
                        </div>

                        <div class="col-span-6 sm:col-span-4">
                            <x-label for="pilihan_dua" value="{{ __('Pilihan Jurusan Kedua') }}" />

                            <x-select wire:model.defer="ppdb.pilihan_dua" id="pilihan_dua" name="pilihan_dua" autocomplete="pilihan_dua" class="block w-full px-3 mt-1">
                                @empty($ppdb->pilihan_dua)
                                <option>{{ __('-- Pilih salah satu') }}</option>
                                @endempty
                                @foreach ($jurusans as $jurusan)
                                <option value="{{ $jurusan->id }}" {{ ($jurusan->id == $ppdb->pilihan_dua) ? 'selected':'' }}>{{ $jurusan->name }}
                                </option>
                                @endforeach
                            </x-select>

                            <x-input-error for="pilihan_dua" class="mt-2" />
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