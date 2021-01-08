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
                            @forelse ($payments as $payment)

                                <div>
                                    <div class="relative w-full transition ease-in-out bg-white rounded-lg shadow-md
                                        {{ ($payment->status) ? 'text-green-600' : 'text-yellow-600' }}
                                        ">
                                        <div class="flex items-center h-full px-5 py-6">
                                            <div class="flex-1 ml-4">
                                                <div class="mb-4 text-xs font-bold ">
                                                    @if ( ! $payment->status )
                                                        {{ __('SEDANG DIVERIFIKASI') }}
                                                    @else
                                                        {{ __('BERHASIL') }}
                                                    @endif
                                                    
                                                </div>
                                                <div class="text-3xl font-extrabold text-gray-900">
                                                    Rp. {{ $payment->amount }},-
                                                </div>
                                                <div class="text-gray-400">{{ $payment->date }}</div>
                                                
                                            </div>
                                        </div>
                                        <div class="absolute top-0 right-0 mt-3 mr-3 sm:mt-6 sm:mr-6">
                                            @if( ! $payment->status )
                                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                                            @else
                                                <svg xmlns="http://www.w3.org/2000/svg" width="20.896" height="20.896"><path data-name="Path 45" d="M7.3 10.448l2.1 2.1 4.2-4.2m6.3 2.1A9.448 9.448 0 1110.448 1a9.448 9.448 0 019.452 9.448z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/></svg>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            @empty
                                kosong
                            @endforelse

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
                            <x-label for="date" value="{{ __('Tanggal Pembayaran') }}"/>
                            <x-input wire:model.defer="date" id="date" type="date" class="block w-full mt-1" />
                            <x-input-error for="date" class="mt-2" />
                        </div>

                        <div class="col-span-6 sm:col-span-4">
                            <x-label for="amount" value="{{ __('Besar Pembayaran') }}"/>
                            <x-input wire:model.defer="amount" id="amount" type="text" class="block w-full mt-1" />
                            <x-input-error for="amount" class="mt-2" />
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
                                    <x-label for="attachment" value="{{ __('Bukti Pembayaran') }}" class="mr-3"/>
                                </div>

                                <img alt="payments"
                                    class="object-cover w-80 bg-white h-56 rounded-xl {!! ( ! auth()->user()->student->payments ) ? 'border-2 border-gray-300 border-dashed' : '' !!}" 

                                    
                                    
                                    @if($attachment)
                                        src="{{ $attachment->temporaryUrl() }}"
                                    @elseif( $user_attachment = Auth::user()->attachment )
                                        src="/storage/{{ $user_attachment }}"
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
                                <input wire:model.defer="attachment" id="attachment" type="file" class=""/>
                                <x-input-error for="attachment" class="mt-2" />
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
