<?php

namespace App\Http\Livewire;

use App\Models\Document;
use Livewire\Component;
use Livewire\WithFileUploads;

use App\Models\Student;
use App\Models\User;

class DataIdentitas extends Component
{
    use WithFileUploads;

    public $successMessage;
    public $photo;

    public $name;
    public $panggilan;
    public $jk;
    public $nisn;
    public $nik;
    public $birthplace;
    public $birthdate;
    public $akta;
    public $agama_id;
    public $address;
    public $rt;
    public $rw;
    public $desa;
    public $kecamatan;
    public $kab;
    public $prov;
    public $kode_pos;
    public $lintang;
    public $bujur;
    public $tinggal_id;
    public $transportasi_id;
    public $phone;

    public $kks;
    public $pkh;
    public $kip;
    public $anak_ke;
    public $saudara;

    public $ayah_nik;
    public $ayah_nama;
    public $ayah_lahir;
    public $ayah_pendidikan;
    public $ayah_pekerjaan;
    public $ayah_penghasilan;

    public $ibu_nik;
    public $ibu_nama;
    public $ibu_lahir;
    public $ibu_pendidikan;
    public $ibu_pekerjaan;
    public $ibu_penghasilan;

    public $wali_nik;
    public $wali_nama;
    public $wali_lahir;
    public $wali_pendidikan;
    public $wali_pekerjaan;
    public $wali_penghasilan;

    public $phone_ortu;

    public $tinggi;
    public $berat;
    public $jarak;
    public $waktu;
    
    public $nomor_ujian;
    public $nomor_ijazah;

    public function mount()
    {
        $student = auth()->user()->student;

        $this->photo = $student->documents->where('type', 'photo')->first()->path;

        $this->name = auth()->user()->name;
        $this->panggilan = $student->panggilan;
        $this->jk = $student->jk;
        $this->nisn = $student->nisn;
        $this->nik = $student->nik;
        $this->birthplace = $student->birthplace;
        $this->birthdate = $student->birthdate;
        $this->akta = $student->akta;
        $this->agama_id = $student->agama_id;
        $this->address = $student->address;
        $this->rt = $student->rt;
        $this->rw = $student->rw;
        $this->desa = $student->desa;
        $this->kecamatan = $student->kecamatan;
        $this->kab = $student->kab;
        $this->prov = $student->prov;
        $this->kode_pos = $student->kode_pos;
        $this->lintang = $student->lintang;
        $this->bujur = $student->bujur;
        $this->tinggal_id = $student->tinggal_id;
        $this->transportasi_id = $student->transportasi_id;
        $this->phone = $student->phone;

        $this->kks = $student->kks;
        $this->pkh = $student->pkh;
        $this->kip = $student->kip;
        $this->anak_ke = $student->anak_ke;
        $this->saudara = $student->saudara;

        $this->ayah_nik = $student->ayah_nik;
        $this->ayah_nama = $student->ayah_nama;
        $this->ayah_lahir = $student->ayah_lahir;
        $this->ayah_pendidikan = $student->ayah_pendidikan;
        $this->ayah_pekerjaan = $student->ayah_pekerjaan;
        $this->ayah_penghasilan = $student->ayah_penghasilan;

        $this->ibu_nik = $student->ibu_nik;
        $this->ibu_nama = $student->ibu_nama;
        $this->ibu_lahir = $student->ibu_lahir;
        $this->ibu_pendidikan = $student->ibu_pendidikan;
        $this->ibu_pekerjaan = $student->ibu_pekerjaan;
        $this->ibu_penghasilan = $student->ibu_penghasilan;

        $this->wali_nik = $student->wali_nik;
        $this->wali_nama = $student->wali_nama;
        $this->wali_lahir = $student->wali_lahir;
        $this->wali_pendidikan = $student->wali_pendidikan;
        $this->wali_pekerjaan = $student->wali_pekerjaan;
        $this->wali_penghasilan = $student->wali_penghasilan;

        $this->phone_ortu = $student->phone_ortu;

        $this->tinggi = $student->tinggi;
        $this->berat = $student->berat;
        $this->jarak = $student->jarak;
        $this->waktu = $student->waktu;

        $this->nomor_ujian = $student->nomor_ujian;
        $this->nomor_ijazah = $student->nomor_ijazah;
    }

    protected $rules = [
        'panggilan' => '',
        'jk' => '',
        'nisn' => 'numeric',
        'nik' => 'numeric',
        'birthplace' => '',
        'birthdate' => '',
        'akta' => '',
        'agama_id' => '',
        'address' => '',
        'rt' => '',
        'rw' => '',
        'desa' => '',
        'kecamatan' => '',
        'kab' => '',
        'prov' => '',
        'kode_pos' => '',
        'lintang' => '',
        'bujur' => '',
        'tinggal_id' => '',
        'transportasi_id' => '',
        'phone' => 'numeric',

        'kks' => '',
        'pkh' => '',
        'kip' => '',
        'anak_ke' => '',
        'saudara' => '',

        'ayah_nik' => '',
        'ayah_nama' => '',
        'ayah_lahir' => '',
        'ayah_pendidikan' => '',
        'ayah_pekerjaan' => '',
        'ayah_penghasilan' => '',

        'ibu_nik' => '',
        'ibu_nama' => '',
        'ibu_lahir' => '',
        'ibu_pendidikan' => '',
        'ibu_pekerjaan' => '',
        'ibu_penghasilan' => '',

        'wali_nik' => '',
        'wali_nama' => '',
        'wali_lahir' => '',
        'wali_pendidikan' => '',
        'wali_pekerjaan' => '',
        'wali_penghasilan' => '',

        'phone_ortu' => '',

        'tinggi' => '',
        'berat' => '',
        'jarak' => '',
        'waktu' => '',

        'nomor_ujian' => '',
        'nomor_ijazah' => '',
    ];

    public function updateIdentitas()
    {

        $validatedData = $this->validate();

        $student = auth()->user()->student;

        Student::where('id', $student->id)
                ->update($validatedData);
        
        User::where('id', auth()->user()->id )
                ->update([
                    'name' => $this->name,
                ]);

        $this->successMessage = 'Data berhasil diperbaharui!';
    }

    public function updated()
    {
        $this->validate();
        $this->successMessage = '';

    }

    public function updatedPhoto()
    {
        $this->validate([
            'photo' => 'image|max:1024', // 1MB Max
        ]);

        $uploaded = $this->photo->store('photo', 'public');

        $student = auth()->user()->student;

        Document::upsert([
            'id' => $student->documents->where('type', 'photo')->first()->id,
            'type' => 'photo',
            'path' => $uploaded,
            'student_id' => $student->id,
        ], ['id', 'student_id', 'type'], ['path']);
    }

    public function render()
    {
        return view('livewire.data-identitas');
    }
}
