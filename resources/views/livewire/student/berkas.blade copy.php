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
                    submit="submitPhoto"
                >
                    <x-slot name="form">

                        <div class="col-span-3 sm:col-span-2"
                            x-data="{ isUploading: false, progress: 0 }"
                            x-on:livewire-upload-start="isUploading = true"
                            x-on:livewire-upload-finish="isUploading = false"
                            x-on:livewire-upload-error="isUploading = false"
                            x-on:livewire-upload-progress="progress = $event.detail.progress"
                        >
                            <div class="relative block overflow-hidden bg-white shadow-xl rounded-xl">
                                <img alt="photo"
                                    class="object-cover w-full h-72 " 
                                    
                                    {{-- @if($photo)
                                        src="{{ $photo->temporaryUrl() }}"
                                    @elseif( $user_photo = Auth::user()->photo )
                                        src="/storage/{{ $user_photo }}"
                                    @else 
                                        src="/images/default-photo.png"
                                    @endif --}}
                                    
                                >

                                <!-- Progress Bar -->
                                <div class="absolute top-4 left-4"
                                        x-show="isUploading"
                                        x-cloak
                                    >
                                    <progress max="100" x-bind:value="progress"></progress>
                                </div>

                            </div>
                            
                            <div class="mt-6">
                                <input wire:model.defer="photo" id="photo" type="file" class=""/>
                                <x-input-error for="photo" class="mt-2" />
                            </div>

                            
                            
                        </div>

                    </x-slot>
                    <x-slot name="actions">
                        <x-button-submit 
                            target="submitPhoto"
                            class="py-2 bg-green-600 hover:bg-green-700 focus:ring-green-500">
                            {{ __('Simpan') }}
                        </x-button-submit>
                    </x-slot>
                </x-form>

            </x-slot>
            
        </x-action-section>
    </div> {{-- end of  --}}
    
    {{-- Kesejahteraan --}}

    <div class="py-10 mx-auto max-w-7xl sm:px-6 lg:px-8">
        <x-action-section>

            <x-slot name="title">
                {{ __('Kesejahteraan')}}
            </x-slot>

            <x-slot name="description">
                {{ __('Pastikan untuk mengunggah foto kartu di menu Unggah Dokumen')}}
            </x-slot>

            <x-slot name="content">

                <x-form successMessage="{{ $successMessage }}"
                    submit="updateBiodata"
                >
                    <x-slot name="form">

                        <div class="col-span-6 sm:col-span-3">
                            <x-label for="kks" value="{{ __('Nomor Kartu KKS') }}" />
                            <x-input wire:model.defer="kks" id="kks" type="text" class="block w-full mt-1"/>
                            <x-input-error for="kks" class="mt-2" />
                        </div>

                    </x-slot>
                    <x-slot name="actions">
                        <x-button-submit 
                            target="updateBiodata"
                            class="py-2 bg-green-600 hover:bg-green-700 focus:ring-green-500">
                            {{ __('Simpan') }}
                        </x-button-submit>
                    </x-slot>
                </x-form>

            </x-slot>
            
        </x-action-section>
    </div> {{-- end of kesejahteraan --}}

</div>