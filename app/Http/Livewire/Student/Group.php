<?php

namespace App\Http\Livewire\Student;

use Livewire\Component;
use App\Models\Ppdb;


class Group extends Component
{
    public $successMessage;

    public $join_wa;

    protected $rules = [
        'join_wa' => 'required',
    ];

    public function mount()
    {
        $student = auth()->user()->student;

        $this->join_wa = $student->ppdb->join_wa;
    }

    public function gabung()
    {
        
    }

    public function submitForm()
    {
        $this->validate();

        Ppdb::where('student_id', auth()->user()->student->id)
            ->update([
                'join_wa' => $this->join_wa,
            ]);

        $this->successMessage = 'Data berhasil diperbaharui!';
    }

    public function render()
    {
        return view('livewire.student.group');
    }
}
