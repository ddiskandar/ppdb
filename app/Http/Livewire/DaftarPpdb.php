<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Periode;
use App\Models\Ppdb;

class DaftarPpdb extends Component
{
    public $student_id;
    public $periode_id;
    public $ref_payment_amount;
    public $periode_name;
    public $periode_desc;

    public function mount()
    {
        $periode = Periode::where('active', true)->first();
        $student = auth()->user()->student;

        // ddd($periode);

        $this->student_id = $student->id;
        $this->periode_id = $periode->id;
        $this->ref_payment_amount = $periode->ref_payment_amount;
        $this->periode_name = $periode->name;
        $this->periode_desc = $periode->desc;
    }

    public function submitForm()
    {

        Ppdb::create([
            'periode_id' => $this->periode_id,
            'student_id' => $this->student_id,
            'major_id' => 1,
            'payment_amount' => $this->ref_payment_amount,
        ]);
    }

    public function render()
    {
        return view('livewire.daftar-ppdb');
    }
}
