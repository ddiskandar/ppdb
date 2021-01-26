<?php

namespace App\Http\Livewire\Admin;

use App\Models\Payment;
use Livewire\Component;

class Confirmation extends Component
{
    public $search;
    
    public function render()
    {
        return view('livewire.admin.confirmation', [
            'payments' => Payment::with('student')->get(),
        ]);
    }
}
