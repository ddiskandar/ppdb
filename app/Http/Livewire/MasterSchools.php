<?php

namespace App\Http\Livewire;

use App\Models\School;
use Livewire\Component;

class Schools extends Component
{
    public function render()
    {
        return view('livewire.schools', [
            'schools' => School::all()
        ]);
    }
}
