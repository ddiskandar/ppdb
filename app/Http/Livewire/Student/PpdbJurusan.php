<?php

namespace App\Http\Livewire\Student;

use App\Models\Jurusan;
use App\Models\Ppdb;
use Livewire\Component;

class PpdbJurusan extends Component
{
    public $successMessage;
    
    public $pilihan_satu;
    public $pilihan_dua;

    public function mount()
    {
        $student = auth()->user()->student;

        $this->pilihan_satu = $student->ppdb->pilihan_satu;
        $this->pilihan_dua = $student->ppdb->pilihan_dua;
    }

    public function submitForm()
    {
        Ppdb::where('student_id', auth()->user()->student->id)
            ->update([
                'pilihan_satu' => $this->pilihan_satu,
                'pilihan_dua' => $this->pilihan_dua,
            ]);

        $this->successMessage = 'Data berhasil diperbaharui!';
    }



    public function render()
    {
        return view('livewire.student.ppdb-jurusan', [
            'jurusans' => Jurusan::all()
        ]);
    }
}
