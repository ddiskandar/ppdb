<?php

namespace App\Http\Livewire\Auth;

use Livewire\Component;
use App\Models\School;

class NewRegistration extends Component
{
    public function render()
    {
        $schools = School::orderBy('name')->get();

        return view('livewire.auth.new-registration', [
            'schools' => $schools->except(1),
        ]);
    }
}
