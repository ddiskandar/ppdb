<?php

namespace App\Http\Livewire\Student;

use Livewire\Component;
use Livewire\WithFileUploads;

use App\Models\Student;
use App\Models\User;
use App\Models\Agama;
use App\Models\Hobby;
use App\Models\Ideals;
use App\Models\School;
use App\Models\Tinggal;
use App\Models\Transportasi;
use App\Models\Ortu;
use App\Models\Pekerjaan;
use App\Models\Pendidikan;
use App\Models\Penghasilan;

class Biodata extends Component
{
    use WithFileUploads;

    public $successMessagePhoto;
    public $successMessagePribadi;
    public $successMessageSchool;
    public $successMessageKeluarga;
    public $successMessagePeriodik;
    public $successMessageRincian;

    public $student;
    public $name;
    
    public $photo;

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

    public function mount()
    {
        $this->student = Student::where('id', auth()->user()->student->id)
            ->with(
                'ortu',
                'user:id,name'
            )
            ->first();

        $this->name = $this->student->user->name;

        $this->ayah_nik = $this->student->ortu->ayah_nik;
        $this->ayah_nama = $this->student->ortu->ayah_nama;
        $this->ayah_lahir = $this->student->ortu->ayah_lahir;
        $this->ayah_pendidikan = $this->student->ortu->ayah_pendidikan;
        $this->ayah_pekerjaan = $this->student->ortu->ayah_pekerjaan;
        $this->ayah_penghasilan = $this->student->ortu->ayah_penghasilan;

        $this->ibu_nik = $this->student->ortu->ibu_nik;
        $this->ibu_nama = $this->student->ortu->ibu_nama;
        $this->ibu_lahir = $this->student->ortu->ibu_lahir;
        $this->ibu_pendidikan = $this->student->ortu->ibu_pendidikan;
        $this->ibu_pekerjaan = $this->student->ortu->ibu_pekerjaan;
        $this->ibu_penghasilan = $this->student->ortu->ibu_penghasilan;

        $this->wali_nik = $this->student->ortu->wali_nik;
        $this->wali_nama = $this->student->ortu->wali_nama;
        $this->wali_lahir = $this->student->ortu->wali_lahir;
        $this->wali_pendidikan = $this->student->ortu->wali_pendidikan;
        $this->wali_pekerjaan = $this->student->ortu->wali_pekerjaan;
        $this->wali_penghasilan = $this->student->ortu->wali_penghasilan;

        $this->phone_ortu = $this->student->ortu->phone_ortu;
    }

    protected $rules = [
        'photo' => 'image|max:5024', // 1MB Max
        // 'student.user.name' => 'required',
        'student.panggilan' => 'required|max:24',
        'student.jk' => 'required|max:1',
        'student.nisn' => 'required',
        'student.nik' => 'required',
        'student.kk' => 'required',
        'student.birthplace' => 'required|max:32',
        'student.birthdate' => 'required|date',
        'student.akta' => 'required|max:21',
        'student.agama_id' => 'required',
        'student.address' => 'required',
        'student.rt' => 'required',
        'student.rw' => 'required',
        'student.desa' => 'required',
        'student.kecamatan' => 'required',
        'student.kab' => 'required',
        'student.prov' => 'required',
        'student.kode_pos' => 'required',
        'student.lintang' => '',
        'student.bujur' => '',
        'student.tinggal_id' => 'required|',
        'student.transportasi_id' => 'required|',
        'student.phone' => 'required',
        'student.anak_ke' => 'required',
        'student.saudara' => 'required',
        'student.school_id' => 'required',
        'student.tinggi' => '',
        'student.berat' => '',
        'student.lingkar_kepala' => '',
        'student.jarak' => '',
        'student.waktu' => '',
        'student.hobby_id' => '',
        'student.ideals_id' => '',
        'student.prestasi' => '',
        'student.pdu' => '',
        'student.olahraga' => '',
        'student.jas' => '',
        
    ];

    public function updatedPhoto()
    {
        $this->validate();
    }

    public function submitPhoto()
    {
        if( empty($this->photo) ) {
            $this->successMessagePhoto = 'Tidak ada yang diperbaharui!';
        } else {
            $user = auth()->user();
            $imageToShow = $this->student->photo ?? null;
            $imageName = $user->username . '-' . $user->name . '.' . $this->photo->extension();

            User::where('id', $user->id)
            ->update([
                'name' => $this->name,
                'photo' => $this->photo ? $this->photo->storeAs('photo', $imageName, 'public') : $imageToShow,
            ]);

            $this->successMessagePhoto = 'Foto berhasil diperbaharui!';
        }

    }

    public function submitPribadi()
    {
        // $validasi = $this->validate();

        User::where('id', auth()->id())
        ->update([
            'name' => $this->name,
        ]);

        $this->student->update([
            'panggilan' => $this->student->panggilan,
            'jk' => $this->student->jk,
            'nisn' => $this->student->nisn,
            'nik' => $this->student->nik,
            'kk' => $this->student->kk,
            'birthplace' => $this->student->birthplace,
            'birthdate' => $this->student->birthdate,
            'akta' => $this->student->akta,
            'agama_id' => $this->student->agama_id,
            'address' => $this->student->address,
            'rt' => $this->student->rt,
            'rw' => $this->student->rw,
            'desa' => $this->student->desa,
            'kecamatan' => $this->student->kecamatan,
            'kab' => $this->student->kab,
            'kab' => $this->student->kab,
            'prov' => $this->student->prov,
            'kode_pos' => $this->student->kode_pos,
            'lintang' => $this->student->lintang,
            'bujur' => $this->student->bujur,
            'tinggal_id' => $this->student->tinggal_id,
            'transportasi_id' => $this->student->transportasi_id,
            'anak_ke' => $this->student->anak_ke,
            'saudara' => $this->student->saudara,
            'phone' => $this->student->phone,
        ]);
        
        $this->successMessagePribadi = 'Data Pribadi berhasil diperbaharui!';
    }

    public function submitSchool()
    {
        $this->student->update([
                'school_id' => $this->student->school_id,
                'school_temp' => $this->student->school_temp,
            ]);
        
        $this->successMessageSchool = 'Data Sekolah berhasil diperbaharui!';
    }

    public function submitKeluarga()
    {
        $this->validate();

        Ortu::where('student_id', $this->student->id)
            ->update([
            'phone_ortu' => $this->phone_ortu,

            'ayah_nik' => $this->ayah_nik,
            'ayah_nama' => $this->ayah_nama,
            'ayah_lahir' => $this->ayah_lahir,
            'ayah_pendidikan' => $this->ayah_pendidikan,
            'ayah_pekerjaan' => $this->ayah_pekerjaan,
            'ayah_penghasilan' => $this->ayah_penghasilan,

            'ibu_nik' => $this->ibu_nik,
            'ibu_nama' => $this->ibu_nama,
            'ibu_lahir' => $this->ibu_lahir,
            'ibu_pendidikan' => $this->ibu_pendidikan,
            'ibu_pekerjaan' => $this->ibu_pekerjaan,
            'ibu_penghasilan' => $this->ibu_penghasilan,

            'wali_nik' => $this->wali_nik,
            'wali_nama' => $this->wali_nama,
            'wali_lahir' => $this->wali_lahir,
            'wali_pendidikan' => $this->wali_pendidikan,
            'wali_pekerjaan' => $this->wali_pekerjaan,
            'wali_penghasilan' => $this->wali_penghasilan,

            ]);

        $this->successMessageKeluarga = 'Data Keluarga berhasil diperbaharui!';
    }

    public function submitPeriodik()
    {
        // $this->validate();

        $this->student->update([
            'tinggi' => $this->student->tinggi,
            'berat' => $this->student->berat,
            'lingkar_kepala' => $this->student->lingkar_kepala,
            'jarak' => $this->student->jarak,
            'waktu' => $this->student->waktu,
        ]);

        $this->successMessagePeriodik = 'Data Periodik berhasil diperbaharui!';
    }

    public function submitRincian()
    {
        // $this->validate();

        $this->student->update([
                'hobby_id' => $this->student->hobby_id,
                'ideals_id' => $this->student->ideals_id,
                'prestasi' => $this->student->prestasi,
                'pdu' => $this->student->pdu,
                'olahraga' => $this->student->olahraga,
                'jas' => $this->student->jas,
            ]);

        $this->successMessageRincian = 'Data Rincian berhasil diperbaharui!';
    }

    public function render()
    {
        return view('livewire.student.biodata', [
            'agamas' => Agama::get(['id', 'name']),
            'tinggals' => Tinggal::get(['id', 'name']),
            'transportasis' => Transportasi::get(['id', 'name']),
            'schools' => School::orderBy('name')->get(['id', 'name']),
            'pendidikans' => Pendidikan::get(['id', 'name']),
            'pekerjaans' => Pekerjaan::get(['id', 'name']),
            'penghasilans' => Penghasilan::get(['id', 'name']),
            'hobbies' => Hobby::get(['id', 'name']),
            'ideals' => Ideals::get(['id', 'name']),
        ]);

    }
}
