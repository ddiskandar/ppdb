<?php

namespace App\Http\Livewire;

use App\Models\Student;
use Livewire\Component;

use Livewire\WithPagination;

class Pendaftaran extends Component
{
    use WithPagination;

    public function render()
    {
        return view('livewire.pendaftaran', [
            'students' => Student::with(['school', 'user'])->paginate(5)
        ]);
    }
}
