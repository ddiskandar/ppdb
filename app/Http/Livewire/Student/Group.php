<?php

namespace App\Http\Livewire\Student;

use Livewire\Component;

class Group extends Component
{
    public $successMessage;

    public function render()
    {
        return view('livewire.student.group');
    }
}
