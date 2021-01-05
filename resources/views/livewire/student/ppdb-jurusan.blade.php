<div>
    <div class="py-10 mx-auto max-w-7xl sm:px-6 lg:px-8">
        <x-action-section>

            <x-slot name="title">
                {{ __('Pas Photo')}}
            </x-slot>

            <x-slot name="description">
                {{ __('Mengenakan seragam asal sekolah')}}
            </x-slot>

            <x-slot name="content">

                <x-form successMessage="{{ $successMessage }}"
                    submit="submitForm"
                >
                    <x-slot name="form">

                        <div class="col-span-6 sm:col-span-3">
                            <x-label for="major_id" value="{{ __('Pilihan Jurusan') }}" />

                            <x-select wire:model.defer="major_id" id="major_id" name="major_id" autocomplete="major_id" class="block w-full px-3 mt-1">
                                @foreach ($majors as $major)
                                    <option value="{{ $major->id }}" 
                                        {{ ($major->id == $major_id) ? 'selected':'' }}
                                        >{{ $major->name }}
                                    </option>
                                @endforeach
                            </x-select>
                            
                            <x-input-error for="agama_id" class="mt-2" />
                        </div>


                    </x-slot>
                    <x-slot name="actions">
                        <x-button-submit 
                            target="submitForm"
                            class="py-2 bg-green-600 hover:bg-green-700 focus:ring-green-500">
                            {{ __('Simpan') }}
                        </x-button-submit>
                    </x-slot>
                </x-form>

            </x-slot>
            
        </x-action-section>
    </div> {{-- end of  --}}
</div>
