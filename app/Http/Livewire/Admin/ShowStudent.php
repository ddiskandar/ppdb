<?php

namespace App\Http\Livewire\Admin;

use App\Models\Student;
use Livewire\Component;

class ShowStudent extends Component
{
    public $student;

    public function mount(Student $student)
    {
        $this->student = $student;
    }
    
    public function render()
    {
        return view('livewire.admin.show-student');
    }
}
