<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Periode;
use App\Models\Ppdb;

class DaftarPpdb extends Component
{
    public $periode_id;

    public function submitForm()
    {

        $student = auth()->user()->student;

        Ppdb::create([
            'student_id' => $student->id,
            'major_id' => 1,
            'payment_amount' => 150000,
        ]);
    }

    public function render()
    {
        return view('livewire.daftar-ppdb', [
            'periode' => Periode::where('active', true)->first(),
        ]);
    }
}
