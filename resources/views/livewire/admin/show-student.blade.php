<div>

    <div class="py-10 mx-auto max-w-7xl sm:px-6 lg:px-8">
        <x-action-section>

            <x-slot name="title">
                {{ __('Data Rincian')}}
            </x-slot>

            <x-slot name="description">
                {{ __('Prestasi, PIP dan ukuran seragam')}}
            </x-slot>

            <x-slot name="content">

                <x-form successMessage="" submit="submitRincian">
                    <x-slot name="form">

                        <div class="col-span-6 sm:col-span-3">
                            <x-label for="phone" value="{{ __('Nomor HP') }}" />
                            <x-input wire:model.defer="student.phone" id="phone" type="text" class="block w-full mt-1" />
                            <x-input-error for="phone" class="mt-2" />
                        </div>

                    </x-slot>
                    <x-slot name="actions">
                        <x-button-submit target="submitRincian" class="py-2 bg-green-600 hover:bg-green-700 focus:ring-green-500">
                            {{ __('Simpan') }}
                        </x-button-submit>
                    </x-slot>
                </x-form>

            </x-slot>

        </x-action-section>
    </div>

</div>