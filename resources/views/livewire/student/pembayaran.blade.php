<div>

    <div class="py-10 mx-auto max-w-7xl sm:px-6 lg:px-8">
        <x-action-section>

            <x-slot name="title">
                {{ __('Bayar Pendaftaran')}}
            </x-slot>

            <x-slot name="description">
                {{ __('Pastikan nominal sesuai dengan yang tertulis, agar proses verifikasi lebih cepat. Panitia akan memverifikasi pembayaran anda maksimal 1x24 jam.')}}
            </x-slot>

            <x-slot name="content">
                <div class="mt-5 md:mt-0 md:col-span-2">
                        <div class="shadow sm:rounded-md sm:overflow-hidden">
                            <div class="px-4 py-5 space-y-6 bg-white sm:p-6">
                                <div class="grid grid-cols-6 gap-6">
                                    Hello

                                </div>
                            </div>
                        </div>
                </div>

            </x-slot>
            
        </x-action-section>
        
    </div> {{-- end of  --}}
    
    <div class="py-10 mx-auto max-w-7xl sm:px-6 lg:px-8">
        <div class="mt-10 sm:mt-0">
                <div class="md:grid md:grid-cols-3 md:gap-6">
                    <div class="md:col-span-1">
                    <div class="px-4 sm:px-0">
                        <h3 class="text-lg font-medium leading-6 text-gray-900">Riwayat pembayaran</h3>
                        <p class="mt-1 text-sm text-gray-600">
                            Daftar status konfirmasi pembayaran
                        </p>
                    </div>
                    </div>
                    <div class="px-4 mt-5 sm:px-0 md:mt-0 md:col-span-2">
                        <div class="grid gap-6 lg:grid-cols-2">

                            <x-payment-card 
                                title="Rp. 200.425"
                                description="Pilih Jalur Pendaftaran"
                            />

                        </div>
                    </div>
                </div>
            </div>
        
    </div> {{-- end of  --}}

    <div class="py-10 mx-auto max-w-7xl sm:px-6 lg:px-8">
        <x-action-section>

            <x-slot name="title">
                {{ __('Konfirmasi pembayaran')}}
            </x-slot>

            <x-slot name="description">
                {{ __('')}}
            </x-slot>

            <x-slot name="content">

                <x-form successMessage="{{ $successMessage }}"
                    submit="submitKonfirmasi"
                >
                    <x-slot name="form">

                        <div class="col-span-6 sm:col-span-4">
                            <x-label for="no_kip" value="{{ __('Tanggal Pembayaran') }}"/>
                            <x-input wire:model.defer="no_kip" id="no_kip" type="date" class="block w-full mt-1" />
                            <x-input-error for="no_kip" class="mt-2" />
                        </div>

                        <div class="col-span-6 sm:col-span-4">
                            <x-label for="no_kip" value="{{ __('Besar Pembayaran') }}"/>
                            <x-input wire:model.defer="no_kip" id="no_kip" type="text" class="block w-full mt-1" />
                            <x-input-error for="no_kip" class="mt-2" />
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
                                    <x-label for="kip" value="{{ __('Bukti Pembayaran') }}" class="mr-3"/>
                                </div>

                                <img alt="payments"
                                    class="object-cover w-80 bg-white h-56 rounded-xl {!! ( ! auth()->user()->student->payments ) ? 'border-2 border-gray-300 border-dashed' : '' !!}" 

                                    src="/images/default-image.jpg"
                                    
                                    {{-- @if($payments)
                                        src="{{ $payments->temporaryUrl() }}"
                                    @elseif( $user_payments )
                                        src="/storage/{{ $user_payments }}"
                                    @else 
                                        src="/images/default-image.jpg"
                                    @endif --}}
                                    
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

                            
                            
                        </div>

                    </x-slot>
                    <x-slot name="actions">
                        <x-button-submit 
                            target="submitKonfirmasi"
                            class="py-2 bg-green-600 hover:bg-green-700 focus:ring-green-500">
                            {{ __('Kirim') }}
                        </x-button-submit>
                    </x-slot>
                </x-form>

            </x-slot>
            
        </x-action-section>
    </div> {{-- end of  --}}
</div>
