<?php

namespace App\Http\Livewire;

use App\Models\Student;
use Livewire\Component;

class Pendaftaran extends Component
{
    public function render()
    {
        return view('livewire.pendaftaran', [
            'students' => Student::with('school')->get()
        ]);
    }
}
