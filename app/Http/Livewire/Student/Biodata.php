<?php

namespace App\Http\Livewire\Student;

use Livewire\Component;
use Livewire\WithFileUploads;

use App\Models\Student;
use App\Models\User;
use App\Models\Agama;

class Biodata extends Component
{
    use WithFileUploads;

    public $successMessage;
    public $successMessagePhoto;

    public $student;
    
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
    public $prestasi;

    public $nomor_ujian;
    public $nomor_ijazah;

    public function mount()
    {
        $this->student = auth()->user()->student;

        $this->name = auth()->user()->name;

        $this->panggilan = $this->student->panggilan;
        $this->jk = $this->student->jk;
        $this->nisn = $this->student->nisn;
        $this->nik = $this->student->nik;
        $this->birthplace = $this->student->birthplace;
        $this->birthdate = $this->student->birthdate;
        $this->akta = $this->student->akta;
        $this->agama_id = $this->student->agama_id;
        $this->address = $this->student->address;
        $this->rt = $this->student->rt;
        $this->rw = $this->student->rw;
        $this->desa = $this->student->desa;
        $this->kecamatan = $this->student->kecamatan;
        $this->kab = $this->student->kab;
        $this->prov = $this->student->prov;
        $this->kode_pos = $this->student->kode_pos;
        $this->lintang = $this->student->lintang;
        $this->bujur = $this->student->bujur;
        $this->tinggal_id = $this->student->tinggal_id;
        $this->transportasi_id = $this->student->transportasi_id;
        $this->phone = $this->student->phone;

        $this->kks = $this->student->kks;
        $this->pkh = $this->student->pkh;
        $this->kip = $this->student->kip;
        $this->anak_ke = $this->student->anak_ke;
        $this->saudara = $this->student->saudara;

        $this->ayah_nik = $this->student->ayah_nik;
        $this->ayah_nama = $this->student->ayah_nama;
        $this->ayah_lahir = $this->student->ayah_lahir;
        $this->ayah_pendidikan = $this->student->ayah_pendidikan;
        $this->ayah_pekerjaan = $this->student->ayah_pekerjaan;
        $this->ayah_penghasilan = $this->student->ayah_penghasilan;

        $this->ibu_nik = $this->student->ibu_nik;
        $this->ibu_nama = $this->student->ibu_nama;
        $this->ibu_lahir = $this->student->ibu_lahir;
        $this->ibu_pendidikan = $this->student->ibu_pendidikan;
        $this->ibu_pekerjaan = $this->student->ibu_pekerjaan;
        $this->ibu_penghasilan = $this->student->ibu_penghasilan;

        $this->wali_nik = $this->student->wali_nik;
        $this->wali_nama = $this->student->wali_nama;
        $this->wali_lahir = $this->student->wali_lahir;
        $this->wali_pendidikan = $this->student->wali_pendidikan;
        $this->wali_pekerjaan = $this->student->wali_pekerjaan;
        $this->wali_penghasilan = $this->student->wali_penghasilan;

        $this->phone_ortu = $this->student->phone_ortu;

        $this->tinggi = $this->student->tinggi;
        $this->berat = $this->student->berat;
        $this->jarak = $this->student->jarak;
        $this->waktu = $this->student->waktu;
        $this->prestasi = $this->student->prestasi;

        $this->nomor_ujian = $this->student->nomor_ujian;
        $this->nomor_ijazah = $this->student->nomor_ijazah;
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
        'prestasi' => '',

        'nomor_ujian' => '',
        'nomor_ijazah' => '',
    ];

    public function updateBiodata()
    {

        $validatedData = $this->validate();

        Student::where('id', $this->student->id)
            ->update($validatedData);
        
        $imageToShow = $this->student->photo ?? null;

        User::where('id', auth()->user()->id)
            ->update([
                'name' => $this->name,
                'photo' => $this->photo ? $this->photo->store('photos', 'public') : $imageToShow,
            ]);

        $this->successMessage = 'Data berhasil diperbaharui!';
    }

    

    public function updatedPhoto()
    {
        $this->validate([
            'photo' => 'image|max:1024', // 1MB Max
        ]);
    }

    public function submitPhoto()
    {

        $imageToShow = $this->student->photo ?? null;

        User::where('id', auth()->user()->id)
            ->update([
                'name' => $this->name,
                'photo' => $this->photo ? $this->photo->store('photos', 'public') : $imageToShow,
            ]);

        $this->successMessagePhoto = 'Foto berhasil diperbaharui!';
    }

    public function render()
    {
        return view('livewire.student.biodata', [
            'agamas' => Agama::all()
        ]);

    }
}
