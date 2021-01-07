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
                    submit="submitBerkas"
                >
                    <x-slot name="form">

                        <div class="col-span-4"
                            x-data="{ isUploading: false, progress: 0 }"
                            x-on:livewire-upload-start="isUploading = true"
                            x-on:livewire-upload-finish="isUploading = false"
                            x-on:livewire-upload-error="isUploading = false"
                            x-on:livewire-upload-progress="progress = $event.detail.progress"
                        >
                            <div class="relative block overflow-hidden ">
                                <div class="flex items-center pb-4">
                                    <x-label for="akta" value="{{ __('Akta Kelahiran') }}" class="mr-3"/>
                                    @if ($user_akta = Auth::user()->student->document->akta)
                                        <svg xmlns="http://www.w3.org/2000/svg" width="19.314" height="19.314"><path data-name="Path 45" d="M6.771 9.657L8.7 11.581l3.848-3.848m5.771 1.924A8.657 8.657 0 119.657 1a8.657 8.657 0 018.657 8.657z" fill="none" stroke="#059669" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/></svg>
                                        <span class="ml-1 text-sm font-bold text-green-600">Sudah diunggah</span>
                                    @endif
                                </div>

                                <img alt="akta"
                                    class="object-cover w-56 bg-white h-80 rounded-xl" 
                                    
                                    @if($akta)
                                        src="{{ $akta->temporaryUrl() }}"
                                    @elseif( $user_akta )
                                        src="/storage/{{ $user_akta }}"
                                    @else 
                                        src="/images/default-photo.png"
                                    @endif
                                    
                                >

                                <!-- Progress Bar -->
                                <div class="absolute top-12 left-4"
                                        x-show="isUploading"
                                        x-cloak
                                    >
                                    <progress max="100" x-bind:value="progress"></progress>
                                </div>

                            </div>
                            
                            <div class="mt-6">
                                <input wire:model.defer="akta" id="akta" type="file" class=""/>
                                <x-input-error for="akta" class="mt-2" />
                            </div>
                            
                        </div>

                        <div class="col-span-4 mt-6"
                            x-data="{ isUploading: false, progress: 0 }"
                            x-on:livewire-upload-start="isUploading = true"
                            x-on:livewire-upload-finish="isUploading = false"
                            x-on:livewire-upload-error="isUploading = false"
                            x-on:livewire-upload-progress="progress = $event.detail.progress"
                        >
                            <div class="relative block overflow-hidden ">

                                <div class="flex items-center pb-4">
                                    <x-label for="kartu_keluarga" value="{{ __('Kartu Keluarga') }}" class="mr-3" content="required"/>
                                    @if ($user_kartu_keluarga = Auth::user()->student->document->kartu_keluarga)
                                        <svg xmlns="http://www.w3.org/2000/svg" width="19.314" height="19.314"><path data-name="Path 45" d="M6.771 9.657L8.7 11.581l3.848-3.848m5.771 1.924A8.657 8.657 0 119.657 1a8.657 8.657 0 018.657 8.657z" fill="none" stroke="#059669" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/></svg>
                                        <span class="ml-1 text-sm font-bold text-green-600">Sudah diunggah</span>
                                    @endif
                                </div>
                                
                                <img alt="kartu_keluarga"
                                    class="object-cover h-56 bg-white w-80 rounded-xl" 
                                    
                                    @if($kartu_keluarga)
                                        src="{{ $kartu_keluarga->temporaryUrl() }}"
                                    @elseif( $user_kartu_keluarga )
                                        src="/storage/{{ $user_kartu_keluarga }}"
                                    @else 
                                        src="/images/default-photo.png"
                                    @endif
                                    
                                >

                                <!-- Progress Bar -->
                                <div class="absolute top-12 left-4"
                                        x-show="isUploading"
                                        x-cloak
                                    >
                                    <progress max="100" x-bind:value="progress"></progress>
                                </div>

                            </div>
                            
                            <div class="mt-6">
                                <input wire:model.defer="kartu_keluarga" id="kartu_keluarga" type="file" class=""/>
                                <x-input-error for="kartu_keluarga" class="mt-2" />
                            </div>
                            
                        </div>

                    </x-slot>
                    <x-slot name="actions">
                        <x-button-submit 
                            target="submitBerkas"
                            class="py-2 bg-green-600 hover:bg-green-700 focus:ring-green-500">
                            {{ __('Simpan') }}
                        </x-button-submit>
                    </x-slot>
                </x-form>

            </x-slot>
            
        </x-action-section>
    </div> {{-- end of  --}}
    
</div>
