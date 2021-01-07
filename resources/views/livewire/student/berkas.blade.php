<div>
    <div class="py-10 mx-auto max-w-7xl sm:px-6 lg:px-8">
        <x-action-section>

            <x-slot name="title">
                {{ __('Dokumen')}}
            </x-slot>

            <x-slot name="description">
                {{ __('Akta kelahiran, Kartu keluarga, Surat Keterangan Lulus, Ijazah')}}
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
                                    class="object-cover w-56 bg-white h-80 rounded-xl {!! ( ! $user_akta ) ? 'border-2 border-gray-300 border-dashed' : '' !!}" 
                                    
                                    @if($akta)
                                        src="{{ $akta->temporaryUrl() }}"
                                    @elseif( $user_akta )
                                        src="/storage/{{ $user_akta }}"
                                    @else 
                                        src="/images/default-image.jpg"
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
                                    class="object-cover h-56 bg-white {!! ( ! $user_kartu_keluarga ) ? 'border-2 border-gray-300 border-dashed' : '' !!} w-80 rounded-xl" 
                                    
                                    @if($kartu_keluarga)
                                        src="{{ $kartu_keluarga->temporaryUrl() }}"
                                    @elseif( $user_kartu_keluarga )
                                        src="/storage/{{ $user_kartu_keluarga }}"
                                    @else 
                                        src="/images/default-image.jpg"
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

                        <div class="col-span-4 mt-6"
                            x-data="{ isUploading: false, progress: 0 }"
                            x-on:livewire-upload-start="isUploading = true"
                            x-on:livewire-upload-finish="isUploading = false"
                            x-on:livewire-upload-error="isUploading = false"
                            x-on:livewire-upload-progress="progress = $event.detail.progress"
                        >
                            <div class="relative block overflow-hidden ">
                                <div class="flex items-center pb-4">
                                    <x-label for="skl" value="{{ __('Surat Keterangan Lulus') }}" class="mr-3"/>
                                    @if ($user_skl = Auth::user()->student->document->skl)
                                        <svg xmlns="http://www.w3.org/2000/svg" width="19.314" height="19.314"><path data-name="Path 45" d="M6.771 9.657L8.7 11.581l3.848-3.848m5.771 1.924A8.657 8.657 0 119.657 1a8.657 8.657 0 018.657 8.657z" fill="none" stroke="#059669" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/></svg>
                                        <span class="ml-1 text-sm font-bold text-green-600">Sudah diunggah</span>
                                    @endif
                                </div>

                                <img alt="skl"
                                    class="object-cover w-56 bg-white h-80 rounded-xl {!! ( ! $user_skl ) ? 'border-2 border-gray-300 border-dashed' : '' !!}" 
                                    
                                    @if($skl)
                                        src="{{ $skl->temporaryUrl() }}"
                                    @elseif( $user_skl )
                                        src="/storage/{{ $user_skl }}"
                                    @else 
                                        src="/images/default-image.jpg"
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
                                <input wire:model.defer="skl" id="skl" type="file" class=""/>
                                <x-input-error for="skl" class="mt-2" />
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
                                    <x-label for="ijazah" value="{{ __('Ijazah') }}" class="mr-3"/>
                                    @if ($user_ijazah = Auth::user()->student->document->ijazah)
                                        <svg xmlns="http://www.w3.org/2000/svg" width="19.314" height="19.314"><path data-name="Path 45" d="M6.771 9.657L8.7 11.581l3.848-3.848m5.771 1.924A8.657 8.657 0 119.657 1a8.657 8.657 0 018.657 8.657z" fill="none" stroke="#059669" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/></svg>
                                        <span class="ml-1 text-sm font-bold text-green-600">Sudah diunggah</span>
                                    @endif
                                </div>

                                <img alt="ijazah"
                                    class="object-cover w-56 bg-white h-80 rounded-xl {!! ( ! $user_ijazah ) ? 'border-2 border-gray-300 border-dashed' : '' !!}" 
                                    
                                    @if($ijazah)
                                        src="{{ $ijazah->temporaryUrl() }}"
                                    @elseif( $user_ijazah )
                                        src="/storage/{{ $user_ijazah }}"
                                    @else 
                                        src="/images/default-image.jpg"
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
                                <input wire:model.defer="ijazah" id="ijazah" type="file" class=""/>
                                <x-input-error for="ijazah" class="mt-2" />
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

    <div class="py-10 mx-auto max-w-7xl sm:px-6 lg:px-8">
        <x-action-section>

            <x-slot name="title">
                {{ __('Kesejahteraan')}}
            </x-slot>

            <x-slot name="description">
                {{ __('Kartu KKS, PKH, KIP, KIS')}}
            </x-slot>

            <x-slot name="content">

                <x-form successMessage="{{ $successMessageKesejahteraan }}"
                    submit="submitKesejahteraan"
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
                                    <x-label for="kks" value="{{ __('Kartu Keluarga Sejahtera') }}" class="mr-3"/>
                                    @if ($user_kks = Auth::user()->student->document->kks)
                                        <svg xmlns="http://www.w3.org/2000/svg" width="19.314" height="19.314"><path data-name="Path 45" d="M6.771 9.657L8.7 11.581l3.848-3.848m5.771 1.924A8.657 8.657 0 119.657 1a8.657 8.657 0 018.657 8.657z" fill="none" stroke="#059669" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/></svg>
                                        <span class="ml-1 text-sm font-bold text-green-600">Sudah diunggah</span>
                                    @endif
                                </div>

                                <img alt="kks"
                                    class="object-cover w-80 bg-white h-56 rounded-xl {!! ( ! $user_kks ) ? 'border-2 border-gray-300 border-dashed' : '' !!}" 
                                    
                                    @if($kks)
                                        src="{{ $kks->temporaryUrl() }}"
                                    @elseif( $user_kks )
                                        src="/storage/{{ $user_kks }}"
                                    @else 
                                        src="/images/default-image.jpg"
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
                                <input wire:model.defer="kks" id="kks" type="file" class=""/>
                                <x-input-error for="kks" class="mt-2" />
                            </div>

                            <div class="col-span-6 mt-4 sm:col-span-4">
                            <x-label for="no_kks" value="{{ __('Nomor KKS') }}"/>
                            <x-input wire:model.defer="no_kks" id="no_kks" type="text" class="block w-full mt-1" />
                            <x-input-error for="no_kks" class="mt-2" />
                        </div>
                            
                        </div>

                        <div class="col-span-4"
                            x-data="{ isUploading: false, progress: 0 }"
                            x-on:livewire-upload-start="isUploading = true"
                            x-on:livewire-upload-finish="isUploading = false"
                            x-on:livewire-upload-error="isUploading = false"
                            x-on:livewire-upload-progress="progress = $event.detail.progress"
                        >
                            <div class="relative block overflow-hidden ">
                                <div class="flex items-center pb-4">
                                    <x-label for="kip" value="{{ __('Kartu Indonesia Pintar') }}" class="mr-3"/>
                                    @if ($user_kip = Auth::user()->student->document->kip)
                                        <svg xmlns="http://www.w3.org/2000/svg" width="19.314" height="19.314"><path data-name="Path 45" d="M6.771 9.657L8.7 11.581l3.848-3.848m5.771 1.924A8.657 8.657 0 119.657 1a8.657 8.657 0 018.657 8.657z" fill="none" stroke="#059669" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/></svg>
                                        <span class="ml-1 text-sm font-bold text-green-600">Sudah diunggah</span>
                                    @endif
                                </div>

                                <img alt="kip"
                                    class="object-cover w-80 bg-white h-56 rounded-xl {!! ( ! $user_kip ) ? 'border-2 border-gray-300 border-dashed' : '' !!}" 
                                    
                                    @if($kip)
                                        src="{{ $kip->temporaryUrl() }}"
                                    @elseif( $user_kip )
                                        src="/storage/{{ $user_kip }}"
                                    @else 
                                        src="/images/default-image.jpg"
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
                                <input wire:model.defer="kip" id="kip" type="file" class=""/>
                                <x-input-error for="kip" class="mt-2" />
                            </div>

                            <div class="col-span-6 mt-4 sm:col-span-4">
                            <x-label for="no_kip" value="{{ __('Nomor KIP') }}"/>
                            <x-input wire:model.defer="no_kip" id="no_kip" type="text" class="block w-full mt-1" />
                            <x-input-error for="no_kip" class="mt-2" />
                        </div>
                            
                        </div>

                        <div class="col-span-4"
                            x-data="{ isUploading: false, progress: 0 }"
                            x-on:livewire-upload-start="isUploading = true"
                            x-on:livewire-upload-finish="isUploading = false"
                            x-on:livewire-upload-error="isUploading = false"
                            x-on:livewire-upload-progress="progress = $event.detail.progress"
                        >
                            <div class="relative block overflow-hidden ">
                                <div class="flex items-center pb-4">
                                    <x-label for="kis" value="{{ __('Kartu Indonesia Sehat') }}" class="mr-3"/>
                                    @if ($user_kis = Auth::user()->student->document->kis)
                                        <svg xmlns="http://www.w3.org/2000/svg" width="19.314" height="19.314"><path data-name="Path 45" d="M6.771 9.657L8.7 11.581l3.848-3.848m5.771 1.924A8.657 8.657 0 119.657 1a8.657 8.657 0 018.657 8.657z" fill="none" stroke="#059669" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/></svg>
                                        <span class="ml-1 text-sm font-bold text-green-600">Sudah diunggah</span>
                                    @endif
                                </div>

                                <img alt="kis"
                                    class="object-cover w-80 bg-white h-56 rounded-xl {!! ( ! $user_kis ) ? 'border-2 border-gray-300 border-dashed' : '' !!}" 
                                    
                                    @if($kis)
                                        src="{{ $kis->temporaryUrl() }}"
                                    @elseif( $user_kis )
                                        src="/storage/{{ $user_kis }}"
                                    @else 
                                        src="/images/default-image.jpg"
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
                                <input wire:model.defer="kis" id="kis" type="file" class=""/>
                                <x-input-error for="kis" class="mt-2" />
                            </div>

                            <div class="col-span-6 mt-4 sm:col-span-4">
                            <x-label for="no_kis" value="{{ __('Nomor KIS') }}"/>
                            <x-input wire:model.defer="no_kis" id="no_kis" type="text" class="block w-full mt-1" />
                            <x-input-error for="no_kis" class="mt-2" />
                        </div>
                            
                        </div>

                        <div class="col-span-4"
                            x-data="{ isUploading: false, progress: 0 }"
                            x-on:livewire-upload-start="isUploading = true"
                            x-on:livewire-upload-finish="isUploading = false"
                            x-on:livewire-upload-error="isUploading = false"
                            x-on:livewire-upload-progress="progress = $event.detail.progress"
                        >
                            <div class="relative block overflow-hidden ">
                                <div class="flex items-center pb-4">
                                    <x-label for="pkh" value="{{ __('Kartu Program Keluarga Harapan') }}" class="mr-3"/>
                                    @if ($user_pkh = Auth::user()->student->document->pkh)
                                        <svg xmlns="http://www.w3.org/2000/svg" width="19.314" height="19.314"><path data-name="Path 45" d="M6.771 9.657L8.7 11.581l3.848-3.848m5.771 1.924A8.657 8.657 0 119.657 1a8.657 8.657 0 018.657 8.657z" fill="none" stroke="#059669" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/></svg>
                                        <span class="ml-1 text-sm font-bold text-green-600">Sudah diunggah</span>
                                    @endif
                                </div>

                                <img alt="pkh"
                                    class="object-cover w-80 bg-white h-56 rounded-xl {!! ( ! $user_pkh ) ? 'border-2 border-gray-300 border-dashed' : '' !!}" 
                                    
                                    @if($pkh)
                                        src="{{ $pkh->temporaryUrl() }}"
                                    @elseif( $user_pkh )
                                        src="/storage/{{ $user_pkh }}"
                                    @else 
                                        src="/images/default-image.jpg"
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
                                <input wire:model.defer="pkh" id="pkh" type="file" class=""/>
                                <x-input-error for="pkh" class="mt-2" />
                            </div>

                            <div class="col-span-6 mt-4 sm:col-span-4">
                            <x-label for="no_pkh" value="{{ __('Nomor PKH') }}"/>
                            <x-input wire:model.defer="no_pkh" id="no_pkh" type="text" class="block w-full mt-1" />
                            <x-input-error for="no_pkh" class="mt-2" />
                        </div>
                            
                        </div>

                    </x-slot>
                    <x-slot name="actions">
                        <x-button-submit 
                            target="submitKesejahteraan"
                            class="py-2 bg-green-600 hover:bg-green-700 focus:ring-green-500">
                            {{ __('Simpan') }}
                        </x-button-submit>
                    </x-slot>
                </x-form>

            </x-slot>
            
        </x-action-section>
    </div> {{-- end of  --}}
    
</div>
