<div class="py-10 mx-auto max-w-7xl sm:px-6 lg:px-8">
        <x-action-section>

            <x-slot name="title">
                {{ __('Ubah Kata Sandi')}}
            </x-slot>

            <x-slot name="description">
                {{ __('Pastikan mengunakan kata sandi yang aman')}}
            </x-slot>

            <x-slot name="content">

                <x-form successMessage="{{ $successMessage }}"
                    submit="submitUpdate"
                >
                    <x-slot name="form">

                        <div class="col-span-6 sm:col-span-4">
                            <x-label for="currentPassword" value="{{ __('Password sekarang') }}" />
                            <x-input wire:model.defer="currentPassword" id="currentPassword" type="password" class="block w-full mt-1"/>
                            <x-input-error for="currentPassword" class="mt-2" />
                        </div>

                        <div class="col-span-6 sm:col-span-4">
                            <x-label for="password" value="{{ __('Password Baru') }}" />
                            <x-input wire:model.defer="password" id="password" type="password" class="block w-full mt-1"/>
                            <x-input-error for="password" class="mt-2" />
                        </div>

                        <div class="col-span-6 sm:col-span-4">
                            <x-label for="passwordConfirmation" value="{{ __('Ketik ulang password baru') }}" />
                            <x-input wire:model.defer="passwordConfirmation" id="passwordConfirmation" type="password" class="block w-full mt-1"/>
                            <x-input-error for="passwordConfirmation" class="mt-2" />
                        </div>

                    </x-slot>
                    <x-slot name="actions">
                        <x-button-submit 
                            target="submitSchool"
                            class="py-2 bg-green-600 hover:bg-green-700 focus:ring-green-500">
                            {{ __('Simpan') }}
                        </x-button-submit>
                    </x-slot>
                </x-form>

            </x-slot>
            
        </x-action-section>
    </div>
