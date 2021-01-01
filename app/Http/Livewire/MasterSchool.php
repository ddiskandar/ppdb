<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\School;

class MasterSchool extends Component
{
    public function render()
    {
        return view('livewire.master-school', [
            'schools' => School::all()
        ]);
    }
}
