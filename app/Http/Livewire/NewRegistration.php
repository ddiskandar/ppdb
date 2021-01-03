<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\School;

class NewRegistration extends Component
{
    public function render()
    {
        $schools = School::orderBy('name')->get();

        return view('livewire.new-registration', [
            'schools' => $schools->except(1),
        ]);
    }
}
