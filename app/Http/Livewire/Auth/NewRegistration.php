<?php

namespace App\Http\Livewire\Auth;

use Livewire\Component;
use App\Models\School;

class NewRegistration extends Component
{
    public function render()
    {
        return view('livewire.auth.new-registration',[
            'schools' => School::orderBy('name')->get(),
        ]);
    }
}
