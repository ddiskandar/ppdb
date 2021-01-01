<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\School;

class MasterSchool extends Component
{
    public $name;
    public $npsn;
    public $address;
    public $last_student;

    protected $rules = [
        'name' => 'required',
        'npsn' => 'required',
        'address' => 'required',
        'last_student' => 'required',
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function submitForm()
    {

        $validatedData = $this->validate();

        School::create($validatedData);

        $this->resetForm();

    }

    private function resetForm()
    {
        $this->name = '';
        $this->npsn = '';
        $this->address = '';
        $this->last_student = '';
    }

    public function render()
    {
        return view('livewire.master-school', [
            'schools' => School::all()
        ]);
    }
}
