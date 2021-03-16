<?php

namespace App\Http\Livewire\Student;

use App\Models\Jurusan;
use App\Models\Periode;
use App\Models\Ppdb;
use App\Models\Student;
use Livewire\Component;

class Home extends Component
{
    public $student;
    public $periode;

    public function mount()
    {
        $this->periode = Periode::where('active', true)
            ->select([
                'id', 'ref_payment_amount', 'name', 'desc'
            ])
            ->first();

        $student = Student::where('user_id', auth()->id())->first(['id']);

        $this->student = Student::where('id', $student->id)
        ->select([
            'id', 'user_id', 'panggilan', 'jk', 'nisn', 'nik', 'kk', 'birthplace', 'birthdate', 'akta', 'address', 'rt', 'rw', 'desa', 'kecamatan', 'kab', 'prov', 'kode_pos', 'tinggal_id', 'transportasi_id', 'school_id', 'phone', 'address', 'nisn', 'name_verified'
        ])
        ->with(
            'ortu:student_id,ibu_nama',
            'user:id,name,username,photo',
            'school:id,name',
            'ppdb:id,student_id,periode_id,pilihan_satu,join_wa,payment_amount',
            'payments:id,student_id,status,amount,verified_by',
            'document:id,student_id,kartu_keluarga'
            
        )
        ->first();
    }

    public function submitForm()
    {
        Ppdb::create([
            'periode_id' => $this->periode->id,
            'student_id' => $this->student->id,
            'payment_amount' => $this->periode->ref_payment_amount,
        ]);
    }

    public function render()
    {
        return view('livewire.student.home', [
            'jurusans' => Jurusan::select(['id', 'name'])->get(),
        ]);
    }
}
