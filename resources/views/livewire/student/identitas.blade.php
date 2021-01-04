<div>
    <div class="py-10 mx-auto max-w-7xl sm:px-6 lg:px-8">
        <x-action-section>

            <x-slot name="title">
                {{ __('Data Peserta Didik')}}
            </x-slot>

            <x-slot name="description">
                {{ __('Siapkan dokumen untuk mengisi')}}
            </x-slot>

            <x-slot name="content">

                <x-form successMessage="{{ $successMessage }}"
                    submit="updateIdentitas"
                >
                    <x-slot name="form">
                        <div class="col-span-6 sm:col-span-4">
                            <x-label for="name" value="{{ __('Nama Lengkap') }}" />
                            <x-input wire:model.lazy="name" id="name" type="text" class="block w-full mt-1"/>
                            <x-input-error for="name" class="mt-2" />
                        </div>

                        <div class="col-span-6 sm:col-span-3">
                            <x-label for="panggilan" value="{{ __('Panggilan') }}" />
                            <x-input wire:model.lazy="panggilan" id="panggilan" type="text" class="block w-full mt-1"/>
                            <x-input-error for="panggilan" class="mt-2" />
                        </div>

                        <div class="col-span-6 sm:col-span-3">
                            <x-label for="jk" value="{{ __('Jenis Kelamin') }}" />
                            <x-input wire:model.lazy="jk" id="jk" type="text" class="block w-full mt-1"/>
                            <x-input-error for="jk" class="mt-2" />
                        </div>

                        <div class="col-span-6 sm:col-span-3">
                            <x-label for="nisn" value="{{ __('NISN') }}" />
                            <x-input wire:model.lazy="nisn" id="nisn" type="text" class="block w-full mt-1"/>
                            <x-input-error for="nisn" class="mt-2" />
                        </div>

                        <div class="col-span-6 sm:col-span-3">
                            <x-label for="kk" value="{{ __('Nomor Kartu Keluarga') }}" />
                            <x-input wire:model.lazy="kk" id="kk" type="text" class="block w-full mt-1"/>
                            <x-input-error for="kk" class="mt-2" />
                        </div>

                        <div class="col-span-6 sm:col-span-3">
                            <x-label for="nik" value="{{ __('Nomor Induk Kependudukan') }}" />
                            <x-input wire:model.lazy="nik" id="nik" type="text" class="block w-full mt-1"/>
                            <x-input-error for="nik" class="mt-2" />
                        </div>

                        <div class="col-span-6 sm:col-span-3">
                            <x-label for="akta" value="{{ __('Nomor Reg Akta Kelahiran') }}" />
                            <x-input wire:model.lazy="akta" id="akta" type="text" class="block w-full mt-1"/>
                            <x-input-error for="akta" class="mt-2" />
                        </div>

                        <div class="col-span-6 sm:col-span-3">
                            <x-label for="birthplace" value="{{ __('Tempat Lahir') }}" />
                            <x-input wire:model.lazy="birthplace" id="birthplace" type="text" class="block w-full mt-1"/>
                            <x-input-error for="birthplace" class="mt-2" />
                        </div>

                        <div class="col-span-6 sm:col-span-3">
                            <x-label for="birthdate" value="{{ __('Tanggal Lahir') }}" />
                            <x-input wire:model.lazy="birthdate" id="birthdate" type="date" class="block w-full mt-1"/>
                            <x-input-error for="birthdate" class="mt-2" />
                        </div>

                        <div class="col-span-6 sm:col-span-2">
                            <x-label for="phone" value="{{ __('Handphone') }}" />
                            <x-input wire:model.lazy="phone" id="phone" type="text" class="block w-full mt-1"/>
                            <x-input-error for="phone" class="mt-2" />
                        </div>

                        <div class="col-span-6 sm:col-span-2">
                            <x-label for="agama_id" value="{{ __('Agama') }}" />
                            <x-input wire:model.lazy="agama_id" id="agama_id" type="text" class="block w-full mt-1"/>
                            <x-input-error for="agama_id" class="mt-2" />
                        </div>

                        <div class="col-span-6 sm:col-span-1">
                            <x-label for="anak_ke" value="{{ __('Anak ke') }}" />
                            <x-input wire:model.lazy="anak_ke" id="anak_ke" type="text" class="block w-full mt-1"/>
                            <x-input-error for="anak_ke" class="mt-2" />
                        </div>

                        <div class="col-span-6 sm:col-span-1">
                            <x-label for="saudara" value="{{ __('Jumlah Saudara') }}" />
                            <x-input wire:model.lazy="saudara" id="saudara" type="text" class="block w-full mt-1"/>
                            <x-input-error for="saudara" class="mt-2" />
                        </div>

                        <div class="col-span-6 sm:col-span-4">
                            <x-label for="address" value="{{ __('Alamat Kampung / Jalan') }}" />
                            <x-input wire:model.lazy="address" id="address" type="text" class="block w-full mt-1"/>
                            <x-input-error for="address" class="mt-2" />
                        </div>

                        <div class="col-span-6 sm:col-span-1">
                            <x-label for="rt" value="{{ __('RT') }}" />
                            <x-input wire:model.lazy="rt" id="rt" type="text" class="block w-full mt-1"/>
                            <x-input-error for="rt" class="mt-2" />
                        </div>

                        <div class="col-span-6 sm:col-span-1">
                            <x-label for="rw" value="{{ __('RW') }}" />
                            <x-input wire:model.lazy="rw" id="rw" type="text" class="block w-full mt-1"/>
                            <x-input-error for="rw" class="mt-2" />
                        </div>

                        <div class="col-span-6 sm:col-span-2">
                            <x-label for="desa" value="{{ __('Desa') }}" />
                            <x-input wire:model.lazy="desa" id="desa" type="text" class="block w-full mt-1"/>
                            <x-input-error for="desa" class="mt-2" />
                        </div>

                        <div class="col-span-6 sm:col-span-2">
                            <x-label for="kecamatan" value="{{ __('Kecamatan') }}" />
                            <x-input wire:model.lazy="kecamatan" id="kecamatan" type="text" class="block w-full mt-1"/>
                            <x-input-error for="kecamatan" class="mt-2" />
                        </div>

                        <div class="col-span-6 sm:col-span-2">
                            <x-label for="kab" value="{{ __('Kabupaten') }}" />
                            <x-input wire:model.lazy="kab" id="kab" type="text" class="block w-full mt-1"/>
                            <x-input-error for="kab" class="mt-2" />
                        </div>

                        <div class="col-span-6 sm:col-span-2">
                            <x-label for="prov" value="{{ __('Provinsi') }}" />
                            <x-input wire:model.lazy="prov" id="prov" type="text" class="block w-full mt-1"/>
                            <x-input-error for="prov" class="mt-2" />
                        </div>

                        <div class="col-span-6 sm:col-span-2">
                            <x-label for="kode_pos" value="{{ __('Kode Pos') }}" />
                            <x-input wire:model.lazy="kode_pos" id="kode_pos" type="text" class="block w-full mt-1"/>
                            <x-input-error for="kode_pos" class="mt-2" />
                        </div>

                        <div class="col-span-6 sm:col-span-3">
                            <x-label for="lintang" value="{{ __('Lintang') }}" />
                            <x-input wire:model.lazy="lintang" id="lintang" type="text" class="block w-full mt-1"/>
                            <x-input-error for="lintang" class="mt-2" />
                        </div>

                        <div class="col-span-6 sm:col-span-3">
                            <x-label for="bujur" value="{{ __('Bujur') }}" />
                            <x-input wire:model.lazy="bujur" id="bujur" type="text" class="block w-full mt-1"/>
                            <x-input-error for="bujur" class="mt-2" />
                        </div>

                        <div class="col-span-6 sm:col-span-3">
                            <x-label for="tinggal_id" value="{{ __('Tempat tinggal') }}" />
                            <x-input wire:model.lazy="tinggal_id" id="tinggal_id" type="text" class="block w-full mt-1"/>
                            <x-input-error for="tinggal_id" class="mt-2" />
                        </div>

                        <div class="col-span-6 sm:col-span-3">
                            <x-label for="transportasi_id" value="{{ __('Moda Transportasi') }}" />
                            <x-input wire:model.lazy="transportasi_id" id="transportasi_id" type="text" class="block w-full mt-1"/>
                            <x-input-error for="transportasi_id" class="mt-2" />
                        </div>
                    </x-slot>
                    <x-slot name="actions">
                        <x-button-submit 
                            target="updateIdentitas"
                            class="py-2 bg-green-600 hover:bg-green-700 focus:ring-green-500">
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

                <x-form successMessage="{{ $successMessage }}"
                    submit="updateIdentitas"
                >
                    <x-slot name="form">

                        <div class="col-span-6 sm:col-span-3">
                            <x-label for="tinggi" value="{{ __('Tinggi Badan (cm)') }}" />
                            <x-input wire:model.lazy="tinggi" id="tinggi" type="text" class="block w-full mt-1"/>
                            <x-input-error for="tinggi" class="mt-2" />
                        </div>

                        <div class="col-span-6 sm:col-span-3">
                            <x-label for="berat" value="{{ __('Berat Badan (Kg)') }}" />
                            <x-input wire:model.lazy="berat" id="berat" type="text" class="block w-full mt-1"/>
                            <x-input-error for="berat" class="mt-2" />
                        </div>

                        <div class="col-span-6 sm:col-span-3">
                            <x-label for="jarak" value="{{ __('Jarak tempat tinggal ke sekolah (Km)') }}" />
                            <x-input wire:model.lazy="jarak" id="jarak" type="text" class="block w-full mt-1"/>
                            <x-input-error for="jarak" class="mt-2" />
                        </div>

                        <div class="col-span-6 sm:col-span-3">
                            <x-label for="waktu" value="{{ __('Waktu tempuh ke sekolah (menit)') }}" />
                            <x-input wire:model.lazy="waktu" id="waktu" type="text" class="block w-full mt-1"/>
                            <x-input-error for="waktu" class="mt-2" />
                        </div>
                        

                    </x-slot>
                    <x-slot name="actions">
                        <x-button-submit 
                            target="updateIdentitas"
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
                {{ __('kondisi kesejahteraan')}}
            </x-slot>

            <x-slot name="content">

                <x-form successMessage="{{ $successMessage }}"
                    submit="updateIdentitas"
                >
                    <x-slot name="form">

                        <div class="col-span-6 sm:col-span-3">
                            <x-label for="kks" value="{{ __('Nomor KKS') }}" />
                            <x-input wire:model.lazy="kks" id="kks" type="text" class="block w-full mt-1"/>
                            <x-input-error for="kks" class="mt-2" />
                        </div>
                        <div class="col-span-6 sm:col-span-3">
                            <x-label for="pkh" value="{{ __('Nomor PKH') }}" />
                            <x-input wire:model.lazy="pkh" id="pkh" type="text" class="block w-full mt-1"/>
                            <x-input-error for="pkh" class="mt-2" />
                        </div>
                        <div class="col-span-6 sm:col-span-3">
                            <x-label for="kip" value="{{ __('Nomor KIP') }}" />
                            <x-input wire:model.lazy="kip" id="kip" type="text" class="block w-full mt-1"/>
                            <x-input-error for="kip" class="mt-2" />
                        </div>
                        

                    </x-slot>
                    <x-slot name="actions">
                        <x-button-submit 
                            target="updateIdentitas"
                            class="py-2 bg-green-600 hover:bg-green-700 focus:ring-green-500">
                            {{ __('Simpan') }}
                        </x-button-submit>
                    </x-slot>
                </x-form>

            </x-slot>
            
        </x-action-section>
    </div> {{-- end of kesejahteraan --}}


    {{-- Orang tua --}}

    <div class="py-10 mx-auto max-w-7xl sm:px-6 lg:px-8">
        <x-action-section>

            <x-slot name="title">
                {{ __('Keluarga')}}
            </x-slot>

            <x-slot name="description">
                {{ __('kondisi keluarga')}}
            </x-slot>

            <x-slot name="content">

                <x-form successMessage="{{ $successMessage }}"
                    submit="updateIdentitas"
                >
                    <x-slot name="form">

                        <div class="col-span-6 sm:col-span-4">
                            <x-label for="ayah_nama" value="{{ __('Nama Ayah') }}" />
                            <x-input wire:model.lazy="ayah_nama" id="ayah_nama" type="text" class="block w-full mt-1"/>
                            <x-input-error for="ayah_nama" class="mt-2" />
                        </div>
                        <div class="col-span-6 sm:col-span-3">
                            <x-label for="ayah_nik" value="{{ __('Nomor NIK Ayah') }}" />
                            <x-input wire:model.lazy="ayah_nik" id="ayah_nik" type="text" class="block w-full mt-1"/>
                            <x-input-error for="ayah_nik" class="mt-2" />
                        </div>
                        
                        <div class="col-span-6 sm:col-span-2">
                            <x-label for="ayah_lahir" value="{{ __('Tahun lahir Ayah') }}" />
                            <x-input wire:model.lazy="ayah_lahir" id="ayah_lahir" type="text" class="block w-full mt-1"/>
                            <x-input-error for="ayah_lahir" class="mt-2" />
                        </div>
                        <div class="col-span-6 sm:col-span-3">
                            <x-label for="ayah_pendidikan" value="{{ __('Pendidikan Terakhir Ayah') }}" />
                            <x-input wire:model.lazy="ayah_pendidikan" id="ayah_pendidikan" type="text" class="block w-full mt-1"/>
                            <x-input-error for="ayah_pendidikan" class="mt-2" />
                        </div>
                        <div class="col-span-6 sm:col-span-3">
                            <x-label for="pekerjaan" value="{{ __('Pekerjaan Ayah') }}" />
                            <x-input wire:model.lazy="pekerjaan" id="pekerjaan" type="text" class="block w-full mt-1"/>
                            <x-input-error for="pekerjaan" class="mt-2" />
                        </div>
                        <div class="col-span-6 sm:col-span-3">
                            <x-label for="ayah_penghasilan" value="{{ __('Penghasilan Ayah') }}" />
                            <x-input wire:model.lazy="ayah_penghasilan" id="ayah_penghasilan" type="text" class="block w-full mt-1"/>
                            <x-input-error for="ayah_penghasilan" class="mt-2" />
                        </div>

                        <div class="col-span-6 sm:col-span-4">
                            <x-label for="ibu_nama" value="{{ __('Nama ibu') }}" />
                            <x-input wire:model.lazy="ibu_nama" id="ibu_nama" type="text" class="block w-full mt-1"/>
                            <x-input-error for="ibu_nama" class="mt-2" />
                        </div>
                        <div class="col-span-6 sm:col-span-3">
                            <x-label for="ibu_nik" value="{{ __('Nomor NIK ibu') }}" />
                            <x-input wire:model.lazy="ibu_nik" id="ibu_nik" type="text" class="block w-full mt-1"/>
                            <x-input-error for="ibu_nik" class="mt-2" />
                        </div>
                        
                        <div class="col-span-6 sm:col-span-2">
                            <x-label for="ibu_lahir" value="{{ __('Tahun lahir ibu') }}" />
                            <x-input wire:model.lazy="ibu_lahir" id="ibu_lahir" type="text" class="block w-full mt-1"/>
                            <x-input-error for="ibu_lahir" class="mt-2" />
                        </div>
                        <div class="col-span-6 sm:col-span-3">
                            <x-label for="ibu_pendidikan" value="{{ __('Pendidikan Terakhir ibu') }}" />
                            <x-input wire:model.lazy="ibu_pendidikan" id="ibu_pendidikan" type="text" class="block w-full mt-1"/>
                            <x-input-error for="ibu_pendidikan" class="mt-2" />
                        </div>
                        <div class="col-span-6 sm:col-span-3">
                            <x-label for="pekerjaan" value="{{ __('Pekerjaan ibu') }}" />
                            <x-input wire:model.lazy="pekerjaan" id="pekerjaan" type="text" class="block w-full mt-1"/>
                            <x-input-error for="pekerjaan" class="mt-2" />
                        </div>
                        <div class="col-span-6 sm:col-span-3">
                            <x-label for="ibu_penghasilan" value="{{ __('Penghasilan ibu') }}" />
                            <x-input wire:model.lazy="ibu_penghasilan" id="ibu_penghasilan" type="text" class="block w-full mt-1"/>
                            <x-input-error for="ibu_penghasilan" class="mt-2" />
                        </div>


                        <div class="col-span-6 sm:col-span-4">
                            <x-label for="wali_nama" value="{{ __('Nama wali') }}" />
                            <x-input wire:model.lazy="wali_nama" id="wali_nama" type="text" class="block w-full mt-1"/>
                            <x-input-error for="wali_nama" class="mt-2" />
                        </div>
                        <div class="col-span-6 sm:col-span-3">
                            <x-label for="wali_nik" value="{{ __('Nomor NIK wali') }}" />
                            <x-input wire:model.lazy="wali_nik" id="wali_nik" type="text" class="block w-full mt-1"/>
                            <x-input-error for="wali_nik" class="mt-2" />
                        </div>
                        
                        <div class="col-span-6 sm:col-span-2">
                            <x-label for="wali_lahir" value="{{ __('Tahun lahir wali') }}" />
                            <x-input wire:model.lazy="wali_lahir" id="wali_lahir" type="text" class="block w-full mt-1"/>
                            <x-input-error for="wali_lahir" class="mt-2" />
                        </div>
                        <div class="col-span-6 sm:col-span-3">
                            <x-label for="wali_pendidikan" value="{{ __('Pendidikan Terakhir wali') }}" />
                            <x-input wire:model.lazy="wali_pendidikan" id="wali_pendidikan" type="text" class="block w-full mt-1"/>
                            <x-input-error for="wali_pendidikan" class="mt-2" />
                        </div>
                        <div class="col-span-6 sm:col-span-3">
                            <x-label for="pekerjaan" value="{{ __('Pekerjaan wali') }}" />
                            <x-input wire:model.lazy="pekerjaan" id="pekerjaan" type="text" class="block w-full mt-1"/>
                            <x-input-error for="pekerjaan" class="mt-2" />
                        </div>
                        <div class="col-span-6 sm:col-span-3">
                            <x-label for="wali_penghasilan" value="{{ __('Penghasilan wali') }}" />
                            <x-input wire:model.lazy="wali_penghasilan" id="wali_penghasilan" type="text" class="block w-full mt-1"/>
                            <x-input-error for="wali_penghasilan" class="mt-2" />
                        </div>

                    </x-slot>
                    <x-slot name="actions">
                        <x-button-submit 
                            target="updateIdentitas"
                            class="py-2 bg-green-600 hover:bg-green-700 focus:ring-green-500">
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
                {{ __('Data Rincian PPDB')}}
            </x-slot>

            <x-slot name="description">
                {{ __('detail kondisi')}}
            </x-slot>

            <x-slot name="content">

                <x-form successMessage="{{ $successMessage }}"
                    submit="updateIdentitas"
                >
                    <x-slot name="form">

                        <div class="col-span-6">
                            <x-label for="prestasi" value="{{ __('Prestasi yang pernah diraih') }}" />
                            <x-textarea wire:model.lazy="prestasi" id="prestasi" rows="5" class="block w-full mt-1"></x-textarea>
                            <x-input-error for="prestasi" class="mt-2" />
                        </div>
                        <div class="col-span-6 sm:col-span-3">
                            <x-label for="pdu" value="{{ __('Ukuran seragam PDU') }}" />
                            <x-input wire:model.lazy="pdu" id="pdu" type="text" class="block w-full mt-1"/>
                            <x-input-error for="pdu" class="mt-2" />
                        </div>
                        <div class="col-span-6 sm:col-span-3">
                            <x-label for="olahraga" value="{{ __('Ukuran seragam Olahraga') }}" />
                            <x-input wire:model.lazy="olahraga" id="olahraga" type="text" class="block w-full mt-1"/>
                            <x-input-error for="olahraga" class="mt-2" />
                        </div>
                        <div class="col-span-6 sm:col-span-3">
                            <x-label for="jas" value="{{ __('Ukuran seragam jas al-mamater') }}" />
                            <x-input wire:model.lazy="jas" id="jas" type="text" class="block w-full mt-1"/>
                            <x-input-error for="jas" class="mt-2" />
                        </div>
                        
                        

                    </x-slot>
                    <x-slot name="actions">
                        <x-button-submit 
                            target="updateIdentitas"
                            class="py-2 bg-green-600 hover:bg-green-700 focus:ring-green-500">
                            {{ __('Simpan') }}
                        </x-button-submit>
                    </x-slot>
                </x-form>

            </x-slot>
            
        </x-action-section>
    </div>

</div>