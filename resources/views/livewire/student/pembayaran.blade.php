<div>

    <div class="mx-auto mt-10 max-w-7xl sm:px-6 lg:px-8">
        <x-action-section>

            <x-slot name="title">
                {{ __('Pembayaran Registrasi PPDB')}}
            </x-slot>

            <x-slot name="description">
                {{ __('Untuk pembayaran dapat datang langsung ke sekretariat PPDB atau melalui transfer.')}}
            </x-slot>

            <x-slot name="content">
                <div class="px-4 mt-5 sm:px-0 md:mt-0 md:col-span-2">
                    <div class="relative w-full overflow-hidden bg-white border-l-4 border-red-600 shadow-md">
                        <div class="px-6 py-8 ">
                            <div class="grid grid-cols-2 gap-6">
                                <div class="col-span-2 lg:col-span-1">
                                    <div class="text-sm text-gray-400 uppercase">No. Rekening</div>
                                    <div class="text-2xl ">1047100027 </div>
                                    <div class="">BNI Syariah a/n SMK Plus Al-Farhan</div>
                                </div>
                                <div class="col-span-2 lg:col-span-1">
                                    <div class="text-sm text-gray-400 uppercase">Sekretariat</div>
                                    <div class="">SMK Plus Al-Farhan</div>
                                    <div class="text-sm">Jalan Cisarua Km. 03 Cimahigirang Ds. Citamiang <br> Kec. Kadudampit Kab. Sukabumi 43153</div>
                                </div>
                            </div>
                            <div class="grid grid-cols-2 gap-6 mt-6">
                                <div class="col-span-2 lg:col-span-1">
                                    <div class="text-sm text-gray-400 uppercase">Biaya pendaftaran</div>
                                    <div class="text-2xl text-red-600">
                                        Rp. 150.021,-
                                    </div>
                                </div>
                                <div class="col-span-2 lg:col-span-1">
                                    <div class="text-sm text-gray-400 uppercase">Status</div>
                                    @if(auth()->user()->student->is_payment_completed())
                                    <div class="text-sm text-green-600">Lunas</div>
                                    @elseif(auth()->user()->student->un_bayar() > 0)
                                    <div class="text-sm text-yellow-600">Sedang dalam verifikasi</div>
                                    @else
                                    <div class="text-sm text-red-600">Belum melakukan Pembayaran</div>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="absolute bottom-0 right-0 w-24 h-24 -m-6 opacity-25 ">
                            <div class="text-red-600">
                                <svg fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>

                                <!-- <svg fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg> -->
                            </div>
                        </div>
                    </div>

                </div>

            </x-slot>

        </x-action-section>



    </div> {{-- end of  --}}

    @if( ! auth()->user()->student->is_payment_completed() )
    <div class="py-6 mx-auto max-w-7xl sm:px-6 lg:px-8">

        <x-section-border />

        <x-action-section>

            <x-slot name="title">
                {{ __('Unggah bukti pembayaran')}}
            </x-slot>

            <x-slot name="description">
                {{ __('Pastikan nominal sesuai dengan yang tertulis, agar proses verifikasi lebih cepat. Panitia akan memverifikasi pembayaran anda maksimal 1x24 jam.')}}
            </x-slot>

            <x-slot name="content">

                <x-form successMessage="{{ $successMessage }}" submit="submitKonfirmasi">
                    <x-slot name="form">

                        <div class="col-span-6 sm:col-span-4">
                            <x-label for="date" value="{{ __('Tanggal Pembayaran') }}" />
                            <x-input wire:model.defer="date" id="date" type="date" class="block w-full mt-1" />
                            <x-input-error for="date" class="mt-2" />
                        </div>

                        <div class="col-span-6 sm:col-span-4">
                            <x-label for="amount" value="{{ __('Besar Pembayaran') }}" />
                            <x-input wire:model.defer="amount" id="amount" type="text" class="block w-full mt-1" />
                            <x-input-error for="amount" class="mt-2" />
                        </div>

                        <div class="col-span-4" x-data="{ isUploading: false, progress: 0 }" x-on:livewire-upload-start="isUploading = true" x-on:livewire-upload-finish="isUploading = false" x-on:livewire-upload-error="isUploading = false" x-on:livewire-upload-progress="progress = $event.detail.progress">


                            <div class="relative block overflow-hidden ">
                                <div class="flex items-center pb-4">
                                    <x-label for="attachment" value="{{ __('Bukti Pembayaran') }}" class="mr-3" />
                                </div>

                                <img alt="payments" class="object-cover w-80 bg-white h-56 rounded-xl {!! ( ! auth()->user()->student->payments ) ? 'border-2 border-gray-300 border-dashed' : '' !!}" @if($attachment) src="{{ $attachment->temporaryUrl() }}" @elseif( $user_attachment=Auth::user()->attachment )
                                src="/storage/{{ $user_attachment }}"
                                @else
                                src="/images/default-image.jpg"
                                @endif

                                >

                                <!-- Progress Bar -->
                                <div class="absolute top-12 left-4" x-show="isUploading" x-cloak>
                                    <progress max="100" x-bind:value="progress"></progress>
                                </div>

                            </div>

                            <div class="mt-6">
                                <input wire:model.defer="attachment" id="attachment" type="file" class="" />
                                <x-input-error for="attachment" class="mt-2" />
                            </div>

                        </div>

                    </x-slot>
                    <x-slot name="actions">
                        <x-button-submit target="submitKonfirmasi" class="py-2 bg-green-600 hover:bg-green-700 focus:ring-green-500">
                            {{ __('Kirim') }}
                        </x-button-submit>
                    </x-slot>
                </x-form>

            </x-slot>

        </x-action-section>
    </div> {{-- end of  --}}
    @endif
</div>