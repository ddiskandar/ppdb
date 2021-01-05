<?php

namespace App\Http\Livewire\Student;

use App\Models\Major;
use App\Models\User;
use Livewire\Component;

class PpdbJurusan extends Component
{
    public $successMessage;
    public $major_id;

    public function mount()
    {
        $student = auth()->user()->student;

        $this->major_id = $student->ppdb->major_id;
    }

    public function submitForm()
    {
        User::where('id', auth()->user()->id)
            ->update([
                'name' => $this->name,
            ]);

        $this->successMessage = 'Data berhasil diperbaharui!';

    }



    public function render()
    {
        return view('livewire.student.ppdb-jurusan', [
            'majors' => Major::all()
        ]);
    }
}
