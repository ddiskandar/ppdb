<?php

namespace App\Http\Livewire\Student;

use Livewire\Component;

use App\Models\Ppdb;
use App\Models\Student;

class Group extends Component
{
    public $successMessage;
    public $ppdb;

    protected $rules = [
        'ppdb.join_wa' => 'required',
    ];

    public function mount()
    {
        $student = Student::where('user_id', auth()->id())->first(['id']);

        $this->ppdb = Ppdb::where('student_id', $student->id)
        ->select([
            'id', 'join_wa',
        ])
        ->with('student:id')
        ->first();
    }

    public function gabung()
    {
        $this->ppdb->update([
            'join_wa' => true,
        ]);
    }

    public function submitForm()
    {
        $this->ppdb->update([
            'join_wa' => $this->ppdb->join_wa,
        ]);

        $this->successMessage = 'Data berhasil diperbaharui!';
    }

    public function render()
    {
        return view('livewire.student.group');
    }
}
