<?php

namespace App\Http\Livewire\Student;

use Livewire\Component;

use App\Models\Jurusan;
use App\Models\Ppdb;
use App\Models\Student;

class PpdbJurusan extends Component
{
    public $successMessage;
    public $ppdb;

    protected $rules = [
        'ppdb.pilihan_kelas' => 'required',
        'ppdb.pilihan_satu' => 'required',
        'ppdb.pilihan_dua' => 'required',
    ];

    public function mount()
    {
        $student = Student::where('user_id', auth()->id())->first(['id']);

        $this->ppdb = Ppdb::where('student_id', $student->id)
        ->select([
            'id', 'pilihan_kelas', 'pilihan_satu', 'pilihan_dua'
        ])
        ->with('student:id')
        ->first();
    }

    public function submitForm()
    {
        $this->ppdb->update([
            'pilihan_kelas' => $this->ppdb->pilihan_kelas,
            'pilihan_satu' => $this->ppdb->pilihan_satu,
            'pilihan_dua' => $this->ppdb->pilihan_dua,
        ]);

        $this->successMessage = 'Data berhasil diperbaharui!';
    }

    public function render()
    {
        return view('livewire.student.ppdb-jurusan', [
            'jurusans' => Jurusan::get(['id','name'])
        ]);
    }
}
