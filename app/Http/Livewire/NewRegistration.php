<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\School;

class NewRegistration extends Component
{
    public function render()
    {
        return view('livewire.new-registration', [
            'schools' => School::orderBy('name')->get()
        ]);
    }
}
