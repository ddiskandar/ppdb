<?php

namespace App\Http\Livewire\Admin;

use App\Models\Student;
use Livewire\Component;

use Livewire\WithPagination;

class Pendaftaran extends Component
{
    use WithPagination;

    public function render()
    {
        return view('livewire.admin.pendaftaran', [
            'students' => Student::with(['school', 'user', 'document', 'payments'])->paginate(5)
        ]);
    }
}
