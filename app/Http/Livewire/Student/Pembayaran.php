<?php

namespace App\Http\Livewire\Student;

use Livewire\Component;

class Pembayaran extends Component
{
    public $successMessage;
    public $payments;
    
    public function render()
    {
        return view('livewire.student.pembayaran');
    }
}
