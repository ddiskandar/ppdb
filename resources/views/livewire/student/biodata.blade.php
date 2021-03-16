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

                <x-form successMessage="{{ $successMessagePhoto }}" submit="submitPhoto">
                    <x-slot name="form">

                        <div class="col-span-4 sm:col-span-2" x-data="{ isUploading: false, progress: 0 }" x-on:livewire-upload-start="isUploading = true" x-on:livewire-upload-finish="isUploading = false" x-on:livewire-upload-error="isUploading = false" x-on:livewire-upload-progress="progress = $event.detail.progress">
                            <div class="relative block overflow-hidden bg-white shadow-xl rounded-xl">
                                <img alt="photo" class="object-cover w-full h-72" @if ( $photo ) src="{{ $photo->temporaryUrl() }}" @elseif ( $user_photo=Auth::user()->photo )
                                src="/storage/{{ $user_photo }}"
                                @else
                                src="/images/default-photo.png"
                                @endif
                                >

                                <!-- Progress Bar -->
                                <div class="absolute top-4 left-4" x-show="isUploading" x-cloak>
                                    <progress max="100" x-bind:value="progress"></progress>
                                </div>

                            </div>

                            <div class="mt-6">
                                <input wire:model.defer="photo" id="photo" type="file" class="" />
                                <x-input-error for="photo" class="mt-2" />
                            </div>

                        </div>

                    </x-slot>
                    <x-slot name="actions">
                        <x-button-submit target="submitPhoto" class="py-2 bg-green-600 hover:bg-green-700 focus:ring-green-500">
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
                {{ __('Data Pribadi')}}
            </x-slot>

            <x-slot name="description">
                {{ __('Pastikan data sesuai dengan dokumen')}}
            </x-slot>

            <x-slot name="content">

                <x-form successMessage="{{ $successMessagePribadi }}" submit="submitPribadi">
                    <x-slot name="form">
                        <div class="col-span-6 sm:col-span-4">
                            <x-label for="name" value="{{ __('Nama Lengkap') }}" content="required" />
                            <x-input wire:model.defer="name" id="name" type="text" class="block w-full mt-1" />
                            <x-input-error for="name" class="mt-2" />
                        </div>

                        <div class="col-span-6 sm:col-span-3">
                            <x-label for="panggilan" value="{{ __('Panggilan') }}" content="required" />
                            <x-input wire:model.defer="student.panggilan" id="panggilan" type="text" class="block w-full mt-1" />
                            <x-input-error for="panggilan" class="mt-2" />
                        </div>

                        <div class="col-span-6 sm:col-span-3">
                            <x-label for="jk" value="{{ __('Jenis Kelamin') }}" content="required" />
                            <x-select wire:model.defer="student.jk" id="jk" name="jk" autocomplete="jk" class="block w-full px-3 mt-1">
                                <option value="L" {{ ($student->jk === "L") ? 'selected':'' }}>{{ __('Laki-laki') }}
                                </option>
                                <option value="P" {{ ($student->jk === "P") ? 'selected':'' }}>{{ __('Perempuan') }}
                                </option>
                            </x-select>
                            <x-input-error for="jk" class="mt-2" />
                        </div>

                        <div class="col-span-6 sm:col-span-3">
                            <x-label for="nisn" value="{{ __('NISN') }}" content="required" />
                            <x-input wire:model.defer="student.nisn" id="nisn" type="text" class="block w-full mt-1" maxlength=10 />
                            <x-input-error for="nisn" class="mt-2" />
                        </div>

                        <div class="col-span-6 sm:col-span-3">
                            <x-label for="nik" value="{{ __('NIK') }}" content="required" />
                            <x-input wire:model.defer="student.nik" id="nik" type="text" class="block w-full mt-1" maxlength=16 />
                            <x-input-error for="nik" class="mt-2" />
                        </div>

                        <div class="col-span-6 sm:col-span-3">
                            <x-label for="kk" value="{{ __('No KK') }}" content="required" />
                            <x-input wire:model.defer="student.kk" id="kk" type="text" class="block w-full mt-1" maxlength=16 />
                            <x-input-error for="kk" class="mt-2" />
                        </div>

                        <div class="col-span-6 sm:col-span-3">
                            <x-label for="birthplace" value="{{ __('Tempat Lahir') }}" content="required" />
                            <x-input wire:model.defer="student.birthplace" id="birthplace" type="text" class="block w-full mt-1" />
                            <x-input-error for="birthplace" class="mt-2" />
                        </div>

                        <div class="col-span-6 sm:col-span-3">
                            <x-label for="birthdate" value="{{ __('Tanggal Lahir') }}" content="required" />
                            <x-input x-data x-init="
                                    new Cleave($el, {
                                        date: true,
                                        delimiter: '/',
                                        datePattern: ['d', 'm', 'Y']
                                    })
                                " wire:model.defer="student.birthdate" id="birthdate" type="date" class="block w-full mt-1" />
                            <x-input-error for="birthdate" class="mt-2" />
                        </div>

                        <div class="col-span-6 sm:col-span-3">
                            <x-label for="akta" value="{{ __('Nomor Reg Akta Kelahiran') }}" content="required" />
                            <x-input wire:model.defer="student.akta" id="akta" type="text" class="block w-full mt-1" maxlength=21 />
                            <x-input-error for="akta" class="mt-2" />
                        </div>

                        <div class="col-span-6 sm:col-span-3">
                            <x-label for="agama_id" value="{{ __('Agama') }}" content="required" />

                            <x-select wire:model.defer="student.agama_id" id="agama_id" name="agama_id" autocomplete="agama_id" class="block w-full px-3 mt-1">
                                @foreach ($agamas as $agama)
                                <option value="{{ $agama->id }}" {{ ($agama->id == $student->agama_id) ? 'selected':'' }}>{{ $agama->name }}
                                </option>
                                @endforeach
                            </x-select>

                            <x-input-error for="agama_id" class="mt-2" />
                        </div>


                        <div class="col-span-6 sm:col-span-4">
                            <x-label for="address" value="{{ __('Alamat Kampung / Jalan') }}" content="required" />
                            <x-input wire:model.defer="student.address" id="address" type="text" class="block w-full mt-1" />
                            <x-input-error for="address" class="mt-2" />
                        </div>

                        <div class="col-span-6 sm:col-span-1">
                            <x-label for="rt" value="{{ __('RT') }}" content="required" />
                            <x-input wire:model.defer="student.rt" id="rt" type="number" class="block w-full mt-1" maxlength=3 />
                            <x-input-error for="rt" class="mt-2" />
                        </div>

                        <div class="col-span-6 sm:col-span-1">
                            <x-label for="rw" value="{{ __('RW') }}" content="required" />
                            <x-input wire:model.defer="student.rw" id="rw" type="number" class="block w-full mt-1" maxlength=3 />
                            <x-input-error for="rw" class="mt-2" />
                        </div>

                        <div class="col-span-6 sm:col-span-2">
                            <x-label for="desa" value="{{ __('Desa/Kelurahan') }}" content="required" />
                            <x-input wire:model.defer="student.desa" id="desa" type="text" class="block w-full mt-1" />
                            <x-input-error for="desa" class="mt-2" />
                        </div>

                        <div class="col-span-6 sm:col-span-2">
                            <x-label for="kecamatan" value="{{ __('Kecamatan') }}" content="required" />
                            <x-input wire:model.defer="student.kecamatan" id="kecamatan" type="text" class="block w-full mt-1" />
                            <x-input-error for="kecamatan" class="mt-2" />
                        </div>

                        <div class="col-span-6 sm:col-span-2">
                            <x-label for="kab" value="{{ __('Kabupaten') }}" content="required" />
                            <x-input wire:model.defer="student.kab" id="kab" type="text" class="block w-full mt-1" />
                            <x-input-error for="kab" class="mt-2" />
                        </div>

                        <div class="col-span-6 sm:col-span-2">
                            <x-label for="prov" value="{{ __('Provinsi') }}" content="required" />
                            <x-input wire:model.defer="student.prov" id="prov" type="text" class="block w-full mt-1" />
                            <x-input-error for="prov" class="mt-2" />
                        </div>

                        <div class="col-span-6 sm:col-span-2">
                            <x-label for="kode_pos" value="{{ __('Kode Pos') }}" />
                            <x-input wire:model.defer="student.kode_pos" id="kode_pos" type="number" class="block w-full mt-1" maxlength=5 />
                            <x-input-error for="kode_pos" class="mt-2" />
                        </div>

                        <div class="col-span-6 sm:col-span-3">
                            <x-label for="lintang" value="{{ __('Lintang') }}" />
                            <x-input wire:model.defer="student.lintang" id="lintang" type="text" class="block w-full mt-1" />
                            <x-input-error for="lintang" class="mt-2" />
                        </div>

                        <div class="col-span-6 sm:col-span-3">
                            <x-label for="bujur" value="{{ __('Bujur') }}" />
                            <x-input wire:model.defer="student.bujur" id="bujur" type="text" class="block w-full mt-1" />
                            <x-input-error for="bujur" class="mt-2" />
                        </div>

                        <div class="col-span-6 sm:col-span-3">
                            <x-label for="tinggal_id" value="{{ __('Tempat tinggal') }}" content="required" />
                            <x-select wire:model.defer="student.tinggal_id" id="tinggal_id" name="tinggal_id" autocomplete="tinggal_id" class="block w-full px-3 mt-1">
                                @foreach ($tinggals as $tinggal)
                                <option value="{{ $tinggal->id }}" {{ ($tinggal->id == $student->tinggal_id) ? 'selected':'' }}>{{ $tinggal->name }}
                                </option>
                                @endforeach
                            </x-select>
                            <x-input-error for="tinggal_id" class="mt-2" />
                        </div>

                        <div class="col-span-6 sm:col-span-3">
                            <x-label for="transportasi_id" value="{{ __('Moda Transportasi') }}" content="required" />
                            <x-select wire:model.defer="student.transportasi_id" id="transportasi_id" name="transportasi_id" autocomplete="transportasi_id" class="block w-full px-3 mt-1">
                                @foreach ($transportasis as $transportasi)
                                <option value="{{ $transportasi->id }}" {{ ($transportasi->id == $student->transportasi_id) ? 'selected':'' }}>{{ $transportasi->name }}
                                </option>
                                @endforeach
                            </x-select>
                            <x-input-error for="transportasi_id" class="mt-2" />
                        </div>

                        <div class="col-span-6 sm:col-span-3">
                            <x-label for="anak_ke" value="{{ __('Anak ke-berapa (berdasarkan KK)') }}" content="required" />
                            <x-input wire:model.defer="student.anak_ke" id="anak_ke" type="number" class="block w-full mt-1" maxlength=2 />
                            <x-input-error for="anak_ke" class="mt-2" />
                        </div>

                        <div class="col-span-6 sm:col-span-3">
                            <x-label for="saudara" value="{{ __('Jumlah Saudara') }}" content="required" />
                            <x-input wire:model.defer="student.saudara" id="saudara" type="number" class="block w-full mt-1" maxlength=2 />
                            <x-input-error for="saudara" class="mt-2" />
                        </div>

                        <div class="col-span-6 sm:col-span-3">
                            <x-label for="phone" value="{{ __('Nomor HP / Whatsapp') }}" content="required" />
                            <x-input wire:model.defer="student.phone" id="phone" type="text" class="block w-full mt-1" maxlength=15 />
                            <x-input-error for="phone" class="mt-2" />
                        </div>

                    </x-slot>
                    <x-slot name="actions">
                        <x-button-submit target="submitPribadi" class="py-2 bg-green-600 hover:bg-green-700 focus:ring-green-500">
                            {{ __('Simpan') }}
                        </x-button-submit>
                    </x-slot>
                </x-form>

            </x-slot>

        </x-action-section>
    </div>

    <div class="py-10 mx-auto max-w-7xl sm:px-6 lg:px-8">
        <x-action-section>

            <x-slot name="title">
                {{ __('Data Sekolah Asal')}}
            </x-slot>

            <x-slot name="description">
                {{ __('Pastikan memilih sekolah sesuai daftar. bila tidak ada pilih Lainnya')}}
            </x-slot>

            <x-slot name="content">

                <x-form successMessage="{{ $successMessageSchool }}" submit="submitSchool">
                    <x-slot name="form">

                        <div class="col-span-6 sm:col-span-3">
                            <x-label for="school_id" value="{{ __('Sekolah Asal') }}" />
                            <x-select wire:model.defer="student.school_id" id="school_id" name="school_id" class="block w-full px-3 mt-1">
                                @foreach ($schools as $school)
                                <option value="{{ $school->id }}" {{ ($school->id == $student->school_id) ? 'selected':'' }}>{{ $school->name }}
                                </option>
                                @endforeach
                            </x-select>

                            <x-input-error for="school_id" class="mt-2" />
                        </div>

                        @if ($student->school_id == 1)
                        <div class="col-span-6 sm:col-span-4">
                            <x-label for="school_temp" value="{{ __('Nama dan Alamat Sekolah') }}" />
                            <x-input wire:model.defer="school_temp" id="school_temp" type="text" class="block w-full mt-1" placeholder="Contoh : SMP Negeri 1 Bandung, Cicendo Kota Bandung" />
                            <x-input-error for="school_temp" class="mt-2" />
                        </div>

                        @endif

                    </x-slot>
                    <x-slot name="actions">
                        <x-button-submit target="submitSchool" class="py-2 bg-green-600 hover:bg-green-700 focus:ring-green-500">
                            {{ __('Simpan') }}
                        </x-button-submit>
                    </x-slot>
                </x-form>

            </x-slot>

        </x-action-section>
    </div> {{-- end of  --}}

    {{-- Orang tua --}}

    <div class="py-10 mx-auto max-w-7xl sm:px-6 lg:px-8">
        <x-action-section>

            <x-slot name="title">
                {{ __('Data Keluarga')}}
            </x-slot>

            <x-slot name="description">
                {{ __('Data Ayah kandung dan Ibu kandung atau Wali')}}
            </x-slot>

            <x-slot name="content">

                <x-form successMessage="{{ $successMessageKeluarga }}" submit="submitKeluarga">
                    <x-slot name="form">

                        <div class="col-span-6 sm:col-span-4">
                            <x-label for="phone_ortu" value="{{ __('Nomor HP Orang tua/Wali') }}" />
                            <x-input wire:model.defer="phone_ortu" id="phone_ortu" type="text" class="block w-full mt-1" maxlength=15 />
                            <x-input-error for="phone_ortu" class="mt-2" />
                        </div>

                        <div class="col-span-6 sm:col-span-4">
                            <x-label for="ayah_nama" value="{{ __('Nama Ayah') }}" />
                            <x-input wire:model.defer="ayah_nama" id="ayah_nama" type="text" class="block w-full mt-1" />
                            <x-input-error for="ayah_nama" class="mt-2" />
                        </div>
                        <div class="col-span-6 sm:col-span-3">
                            <x-label for="ayah_nik" value="{{ __('Nomor NIK Ayah') }}" />
                            <x-input wire:model.defer="ayah_nik" id="ayah_nik" type="number" class="block w-full mt-1" maxlength=16 />
                            <x-input-error for="ayah_nik" class="mt-2" />
                        </div>

                        <div class="col-span-6 sm:col-span-2">
                            <x-label for="ayah_lahir" value="{{ __('Tahun lahir Ayah') }}" />
                            <x-input wire:model.defer="ayah_lahir" id="ayah_lahir" type="number" class="block w-full mt-1" maxlength=4 />
                            <x-input-error for="ayah_lahir" class="mt-2" />
                        </div>
                        <div class="col-span-6 sm:col-span-3">
                            <x-label for="ayah_pendidikan" value="{{ __('Pendidikan Terakhir Ayah') }}" />
                            <x-select wire:model.defer="ayah_pendidikan" id="ayah_pendidikan" name="ayah_pendidikan" class="block w-full px-3 mt-1">
                                @foreach ($pendidikans as $pendidikan)
                                <option value="{{ $pendidikan->id }}" {{ ($pendidikan->id == $ayah_pendidikan) ? 'selected':'' }}>{{ $pendidikan->name }}
                                </option>
                                @endforeach
                            </x-select>
                            <x-input-error for="ayah_pendidikan" class="mt-2" />
                        </div>
                        <div class="col-span-6 sm:col-span-3">
                            <x-label for="pekerjaan" value="{{ __('Pekerjaan Ayah') }}" />
                            <x-select wire:model.defer="ayah_pekerjaan" id="ayah_pekerjaan" name="ayah_pekerjaan" autocomplete="ayah_pekerjaan" class="block w-full px-3 mt-1">
                                @foreach ($pekerjaans as $pekerjaan)
                                <option value="{{ $pekerjaan->id }}" {{ ($pekerjaan->id == $ayah_pekerjaan) ? 'selected':'' }}>{{ $pekerjaan->name }}
                                </option>
                                @endforeach
                            </x-select>
                            <x-input-error for="pekerjaan" class="mt-2" />
                        </div>
                        <div class="col-span-6 sm:col-span-3">
                            <x-label for="ayah_penghasilan" value="{{ __('Penghasilan Ayah') }}" />
                            <x-select wire:model.defer="ayah_penghasilan" id="ayah_penghasilan" name="ayah_penghasilan" autocomplete="ayah_penghasilan" class="block w-full px-3 mt-1">
                                @foreach ($penghasilans as $penghasilan)
                                <option value="{{ $penghasilan->id }}" {{ ($penghasilan->id == $ayah_penghasilan) ? 'selected':'' }}>{{ $penghasilan->name }}
                                </option>
                                @endforeach
                            </x-select>
                            <x-input-error for="ayah_penghasilan" class="mt-2" />
                        </div>

                        <div class="col-span-6 sm:col-span-4">
                            <x-label for="ibu_nama" value="{{ __('Nama ibu') }}" />
                            <x-input wire:model.defer="ibu_nama" id="ibu_nama" type="text" class="block w-full mt-1" />
                            <x-input-error for="ibu_nama" class="mt-2" />
                        </div>
                        <div class="col-span-6 sm:col-span-3">
                            <x-label for="ibu_nik" value="{{ __('Nomor NIK ibu') }}" />
                            <x-input wire:model.defer="ibu_nik" id="ibu_nik" type="number" class="block w-full mt-1" maxlength=16 />
                            <x-input-error for="ibu_nik" class="mt-2" />
                        </div>

                        <div class="col-span-6 sm:col-span-2">
                            <x-label for="ibu_lahir" value="{{ __('Tahun lahir ibu') }}" />
                            <x-input wire:model.defer="ibu_lahir" id="ibu_lahir" type="number" class="block w-full mt-1" maxlength=4 />
                            <x-input-error for="ibu_lahir" class="mt-2" />
                        </div>
                        <div class="col-span-6 sm:col-span-3">
                            <x-label for="ibu_pendidikan" value="{{ __('Pendidikan Terakhir ibu') }}" />
                            <x-select wire:model.defer="ibu_pendidikan" id="ibu_pendidikan" name="ibu_pendidikan" autocomplete="ibu_pendidikan" class="block w-full px-3 mt-1">
                                @foreach ($pendidikans as $pendidikan)
                                <option value="{{ $pendidikan->id }}" {{ ($pendidikan->id == $ibu_pendidikan) ? 'selected':'' }}>{{ $pendidikan->name }}
                                </option>
                                @endforeach
                            </x-select>
                            <x-input-error for="ibu_pendidikan" class="mt-2" />
                        </div>
                        <div class="col-span-6 sm:col-span-3">
                            <x-label for="pekerjaan" value="{{ __('Pekerjaan ibu') }}" />
                            <x-select wire:model.defer="ibu_pekerjaan" id="ibu_pekerjaan" name="ibu_pekerjaan" autocomplete="ibu_pekerjaan" class="block w-full px-3 mt-1">
                                @foreach ($pekerjaans as $pekerjaan)
                                <option value="{{ $pekerjaan->id }}" {{ ($pekerjaan->id == $ibu_pekerjaan) ? 'selected':'' }}>{{ $pekerjaan->name }}
                                </option>
                                @endforeach
                            </x-select>
                            <x-input-error for="pekerjaan" class="mt-2" />
                        </div>
                        <div class="col-span-6 sm:col-span-3">
                            <x-label for="ibu_penghasilan" value="{{ __('Penghasilan ibu') }}" />
                            <x-select wire:model.defer="ibu_penghasilan" id="ibu_penghasilan" name="ibu_penghasilan" autocomplete="ibu_penghasilan" class="block w-full px-3 mt-1">
                                @foreach ($penghasilans as $penghasilan)
                                <option value="{{ $penghasilan->id }}" {{ ($penghasilan->id == $ibu_penghasilan) ? 'selected':'' }}>{{ $penghasilan->name }}
                                </option>
                                @endforeach
                            </x-select>
                            <x-input-error for="ibu_penghasilan" class="mt-2" />
                        </div>

                        <div class="col-span-6 sm:col-span-4">
                            <x-label for="wali_nama" value="{{ __('Nama wali') }}" />
                            <x-input wire:model.defer="wali_nama" id="wali_nama" type="text" class="block w-full mt-1" />
                            <x-input-error for="wali_nama" class="mt-2" />
                        </div>
                        <div class="col-span-6 sm:col-span-3">
                            <x-label for="wali_nik" value="{{ __('Nomor NIK wali') }}" />
                            <x-input wire:model.defer="wali_nik" id="wali_nik" type="number" class="block w-full mt-1" maxlength=16 />
                            <x-input-error for="wali_nik" class="mt-2" />
                        </div>

                        <div class="col-span-6 sm:col-span-2">
                            <x-label for="wali_lahir" value="{{ __('Tahun lahir wali') }}" />
                            <x-input wire:model.defer="wali_lahir" id="wali_lahir" type="number" class="block w-full mt-1" maxlength=4 />
                            <x-input-error for="wali_lahir" class="mt-2" />
                        </div>
                        <div class="col-span-6 sm:col-span-3">
                            <x-label for="wali_pendidikan" value="{{ __('Pendidikan Terakhir wali') }}" />
                            <x-select wire:model.defer="wali_pendidikan" id="wali_pendidikan" name="wali_pendidikan" autocomplete="wali_pendidikan" class="block w-full px-3 mt-1">
                                @foreach ($pendidikans as $pendidikan)
                                <option value="{{ $pendidikan->id }}" {{ ($pendidikan->id == $wali_pendidikan) ? 'selected':'' }}>{{ $pendidikan->name }}
                                </option>
                                @endforeach
                            </x-select>
                            <x-input-error for="wali_pendidikan" class="mt-2" />
                        </div>
                        <div class="col-span-6 sm:col-span-3">
                            <x-label for="pekerjaan" value="{{ __('Pekerjaan wali') }}" />
                            <x-select wire:model.defer="wali_pekerjaan" id="wali_pekerjaan" name="wali_pekerjaan" autocomplete="wali_pekerjaan" class="block w-full px-3 mt-1">
                                @foreach ($pekerjaans as $pekerjaan)
                                <option value="{{ $pekerjaan->id }}" {{ ($pekerjaan->id == $wali_pekerjaan) ? 'selected':'' }}>{{ $pekerjaan->name }}
                                </option>
                                @endforeach
                            </x-select>
                            <x-input-error for="pekerjaan" class="mt-2" />
                        </div>
                        <div class="col-span-6 sm:col-span-3">
                            <x-label for="wali_penghasilan" value="{{ __('Penghasilan wali') }}" />
                            <x-select wire:model.defer="wali_penghasilan" id="wali_penghasilan" name="wali_penghasilan" autocomplete="wali_penghasilan" class="block w-full px-3 mt-1">
                                @foreach ($penghasilans as $penghasilan)
                                <option value="{{ $penghasilan->id }}" {{ ($penghasilan->id == $wali_penghasilan) ? 'selected':'' }}>{{ $penghasilan->name }}
                                </option>
                                @endforeach
                            </x-select>
                            <x-input-error for="wali_penghasilan" class="mt-2" />
                        </div>

                    </x-slot>
                    <x-slot name="actions">
                        <x-button-submit target="submitKeluarga" class="py-2 bg-green-600 hover:bg-green-700 focus:ring-green-500">
                            {{ __('Simpan') }}
                        </x-button-submit>
                    </x-slot>
                </x-form>

            </x-slot>

        </x-action-section>
    </div>

    {{-- Data Periodik --}}

    <div class="py-10 mx-auto max-w-7xl sm:px-6 lg:px-8">
        <x-action-section>

            <x-slot name="title">
                {{ __('Data Periodik')}}
            </x-slot>

            <x-slot name="description">
                {{ __('Tinggi badan, berat badan, jarak')}}
            </x-slot>

            <x-slot name="content">

                <x-form successMessage="{{ $successMessagePeriodik }}" submit="submitPeriodik">
                    <x-slot name="form">

                        <div class="col-span-6 sm:col-span-2">
                            <x-label for="tinggi" value="{{ __('Tinggi Badan (cm)') }}" />
                            <x-input wire:model.defer="student.tinggi" id="tinggi" type="number" class="block w-full mt-1" maxlength=3 />
                            <x-input-error for="tinggi" class="mt-2" />
                        </div>

                        <div class="col-span-6 sm:col-span-2">
                            <x-label for="berat" value="{{ __('Berat Badan (Kg)') }}" />
                            <x-input wire:model.defer="student.berat" id="berat" type="number" class="block w-full mt-1" maxlength=3 />
                            <x-input-error for="berat" class="mt-2" />
                        </div>

                        <div class="col-span-6 sm:col-span-2">
                            <x-label for="lingkar_kepala" value="{{ __('Lingkar Kepala') }}" />
                            <x-input wire:model.defer="student.lingkar_kepala" id="lingkar_kepala" type="number" class="block w-full mt-1" maxlength=3 />
                            <x-input-error for="lingkar_kepala" class="mt-2" />
                        </div>

                        <div class="col-span-6 sm:col-span-3">
                            <x-label for="jarak" value="{{ __('Jarak tempat tinggal ke sekolah (Km)') }}" />
                            <x-input wire:model.defer="student.jarak" id="jarak" type="number" class="block w-full mt-1" maxlength=3 />
                            <x-input-error for="jarak" class="mt-2" />
                        </div>

                        <div class="col-span-6 sm:col-span-3">
                            <x-label for="waktu" value="{{ __('Waktu tempuh ke sekolah (menit)') }}" />
                            <x-input wire:model.defer="student.waktu" id="waktu" type="number" class="block w-full mt-1" maxlength=3 />
                            <x-input-error for="waktu" class="mt-2" />
                        </div>


                    </x-slot>
                    <x-slot name="actions">
                        <x-button-submit target="submitPeriodik" class="py-2 bg-green-600 hover:bg-green-700 focus:ring-green-500">
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
                {{ __('Data Rincian')}}
            </x-slot>

            <x-slot name="description">
                {{ __('Prestasi dan ukuran seragam')}}
            </x-slot>

            <x-slot name="content">

                <x-form successMessage="{{ $successMessageRincian }}" submit="submitRincian">
                    <x-slot name="form">

                        <div class="col-span-6 sm:col-span-3">
                            <x-label for="hobby_id" value="{{ __('Hobby') }}" />
                            <x-select wire:model.defer="student.hobby_id" id="hobby_id" name="hobby_id" autocomplete="hobby_id" class="block w-full px-3 mt-1">
                                @foreach ($hobbies as $hobby)
                                <option value="{{ $hobby->id }}" {{ ($hobby->id == $student->hobby_id) ? 'selected':'' }}>{{ $hobby->name }}
                                </option>
                                @endforeach
                            </x-select>
                            <x-input-error for="hobby_id" class="mt-2" />
                        </div>

                        <div class="col-span-6 sm:col-span-3">
                            <x-label for="ideals_id" value="{{ __('Cita-cita') }}" />
                            <x-select wire:model.defer="student.ideals_id" id="ideals_id" name="ideals_id" autocomplete="ideals_id" class="block w-full px-3 mt-1">
                                @foreach ($ideals as $ideal)
                                <option value="{{ $ideal->id }}" {{ ($ideal->id == $student->ideals_id) ? 'selected':'' }}>{{ $ideal->name }}
                                </option>
                                @endforeach
                            </x-select>
                            <x-input-error for="ideals_id" class="mt-2" />
                        </div>

                        <div class="col-span-6">
                            <x-label for="prestasi" value="{{ __('Prestasi yang pernah diraih') }}" />
                            <x-textarea wire:model.defer="student.prestasi" id="prestasi" rows="5" class="block w-full mt-1" maxlength=512></x-textarea>
                            <x-input-error for="prestasi" class="mt-2" />
                        </div>

                        <div class="col-span-6 sm:col-span-3">
                            <x-label for="pdu" value="{{ __('Ukuran seragam PDU') }}" />
                            <x-input wire:model.defer="student.pdu" id="pdu" type="text" class="block w-full mt-1" maxlength=4 />
                            <x-input-error for="pdu" class="mt-2" />
                        </div>
                        <div class="col-span-6 sm:col-span-3">
                            <x-label for="olahraga" value="{{ __('Ukuran seragam Olahraga') }}" />
                            <x-input wire:model.defer="student.olahraga" id="olahraga" type="text" class="block w-full mt-1" maxlength=4 />
                            <x-input-error for="olahraga" class="mt-2" />
                        </div>
                        <div class="col-span-6 sm:col-span-3">
                            <x-label for="jas" value="{{ __('Ukuran seragam Jas Almamater') }}" />
                            <x-input wire:model.defer="student.jas" id="jas" type="text" class="block w-full mt-1" maxlength=4 />
                            <x-input-error for="jas" class="mt-2" />
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