<?php

namespace App\Http\Livewire\Admin;

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

class ShowStudent extends Component
{
    use WithFileUploads;

    public $successMessagePhoto;
    public $successMessagePribadi;
    public $successMessageSchool;
    public $successMessageKeluarga;
    public $successMessagePeriodik;
    public $successMessageRincian;

    public $student;
    public $school_id;
    public $school_temp;

    public $photo;

    public $name;
    public $panggilan;
    public $jk;
    public $nisn;
    public $nik;
    public $kk;
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

    public $tinggi;
    public $berat;
    public $jarak;
    public $waktu;
    public $hobby_id;
    public $ideals_id;
    public $prestasi;
    public $pdu;
    public $olahraga;
    public $jas;

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

    public function mount(Student $student)
    {
        $this->student = $student;
        $this->name = $this->student->user->name;

        $this->panggilan = $this->student->panggilan;
        $this->jk = $this->student->jk;
        $this->nisn = $this->student->nisn;
        $this->nik = $this->student->nik;
        $this->kk = $this->student->kk;
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

        $this->school_id = $this->student->school_id;
        $this->school_temp = $this->student->school_temp;
        $this->kks = $this->student->kks;
        $this->pkh = $this->student->pkh;
        $this->kip = $this->student->kip;
        $this->anak_ke = $this->student->anak_ke;
        $this->saudara = $this->student->saudara;

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

        $this->tinggi = $this->student->tinggi;
        $this->berat = $this->student->berat;
        $this->lingkar_kepala = $this->student->lingkar_kepala;
        $this->jarak = $this->student->jarak;
        $this->waktu = $this->student->waktu;

        $this->hobby_id = $this->student->hobby_id;
        $this->ideals_id = $this->student->ideals_id;
        $this->prestasi = $this->student->prestasi;
        $this->pdu = $this->student->pdu;
        $this->olahraga = $this->student->olahraga;
        $this->jas = $this->student->jas;
    }

    protected $rules = [
        'photo' => 'image|max:5024', // 1MB Max
    ];

    public function updatedPhoto()
    {
        $this->validate();
    }

    public function submitPhoto()
    {
        $this->validate();

        if (empty($this->photo)) {
            $this->successMessagePhoto = 'Tidak ada yang diperbaharui!';
        } else {
            $user = $this->student->user;
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
        $this->validate([
            'name' => 'required|max:32',
            'panggilan' => 'required|max:24',
            'jk' => 'required|max:1',
            'nisn' => 'required',
            'nik' => 'required',
            'kk' => 'required',
            'birthplace' => 'required|max:32',
            'birthdate' => 'required|date',
            'akta' => '',
            'agama_id' => 'required',
            'address' => 'required',
            'rt' => 'required',
            'rw' => 'required',
            'desa' => 'required',
            'kecamatan' => 'required',
            'kab' => 'required',
            'prov' => 'required',
            'kode_pos' => 'required',
            'lintang' => '',
            'bujur' => '',
            'tinggal_id' => 'required|',
            'transportasi_id' => 'required|',
            'phone' => 'required',
            'anak_ke' => 'required',
            'saudara' => 'required',
        ]);

        User::where('id', $this->student->user->id)
            ->update([
                'name' => $this->name,
            ]);

        Student::where('id', $this->student->id)
            ->update([
                'panggilan' => $this->panggilan,
                'jk' => $this->jk,
                'nisn' => $this->nisn,
                'nik' => $this->nik,
                'kk' => $this->kk,
                'birthplace' => $this->birthplace,
                'birthdate' => $this->birthdate,
                'akta' => $this->akta,
                'agama_id' => $this->agama_id,
                'address' => $this->address,
                'rt' => $this->rt,
                'rw' => $this->rw,
                'desa' => $this->desa,
                'kecamatan' => $this->kecamatan,
                'kab' => $this->kab,
                'kab' => $this->kab,
                'prov' => $this->prov,
                'kode_pos' => $this->kode_pos,
                'lintang' => $this->lintang,
                'bujur' => $this->bujur,
                'tinggal_id' => $this->tinggal_id,
                'transportasi_id' => $this->transportasi_id,
                'anak_ke' => $this->anak_ke,
                'saudara' => $this->saudara,
                'phone' => $this->phone,
            ]);

        $this->successMessagePribadi = 'Data Pribadi berhasil diperbaharui!';
    }

    public function submitSchool()
    {
        $this->validate([
            'school_id' => 'required',
        ]);

        Student::where('id', $this->student->id)
            ->update([
                'school_id' => $this->school_id,
                'school_temp' => $this->school_temp,
            ]);

        $this->successMessageSchool = 'Data Sekolah berhasil diperbaharui!';
    }

    public function submitKeluarga()
    {
        $this->validate([
            'ayah_nik' => '',
            'ayah_nama' => 'required',
            'ayah_lahir' => '',
            'ayah_pendidikan' => '',
            'ayah_pekerjaan' => '',
            'ayah_penghasilan' => '',

            'ibu_nik' => '',
            'ibu_nama' => 'required',
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
        ]);

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
        $this->validate([
            'tinggi' => '',
            'berat' => '',
            'jarak' => '',
            'waktu' => '',
        ]);

        Student::where('id', $this->student->id)
            ->update([
                'tinggi' => $this->tinggi,
                'berat' => $this->berat,
                'jarak' => $this->jarak,
                'waktu' => $this->waktu,
            ]);

        $this->successMessagePeriodik = 'Data Periodik berhasil diperbaharui!';
    }

    public function submitRincian()
    {
        $this->validate([
            'prestasi' => '',
            'pdu' => '',
            'olahraga' => '',
            'jas' => '',
        ]);

        Student::where('id', $this->student->id)
            ->update([
                'prestasi' => $this->prestasi,
                'pdu' => $this->pdu,
                'olahraga' => $this->olahraga,
                'jas' => $this->jas,
            ]);

        $this->successMessageRincian = 'Data Rincian berhasil diperbaharui!';
    }

    public function render()
    {
        return view('livewire.student.biodata', [
            'agamas' => Agama::all(),
            'tinggals' => Tinggal::all(),
            'transportasis' => Transportasi::all(),
            'schools' => School::orderBy('name')->get(),
            'pendidikans' => Pendidikan::all(),
            'pekerjaans' => Pekerjaan::all(),
            'penghasilans' => Penghasilan::all(),
            'hobbies' => Hobby::all(),
            'ideals' => Ideals::all(),
        ]);
    }
}
