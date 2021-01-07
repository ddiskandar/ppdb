<?php

namespace App\Http\Livewire\Student;

use Livewire\Component;
use Livewire\WithFileUploads;

use App\Models\Document;

class Berkas extends Component
{
    use WithFileUploads;

    public $successMessage;

    public $akta;
    public $kartu_keluarga;

    public function mount()
    {
        $this->student = auth()->user()->student;

        // $this->akta = $this->student->document->akta;
        
    }

    public function submitBerkas()
    {
        
        $this->student = auth()->user()->student;
        $user = auth()->user();
        $akta = $this->student->document->akta ?? null;
        $kartu_keluarga = $this->student->document->kartu_keluarga ?? null;
        
        if($this->akta) {
            $aktaName = $user->username . '-' . $user->name . '.' . $this->akta->extension();
        }
        if($this->kartu_keluarga) {
            $kartu_keluargaName = $user->username . '-' . $user->name . '.' . $this->kartu_keluarga->extension();
        }

        Document::where('student_id', $this->student->id)
            ->update([
                'akta' => $this->akta ? $this->akta->storeAs('akta', $aktaName, 'public') : $akta,
                'kartu_keluarga' => $this->kartu_keluarga ? $this->kartu_keluarga->storeAs('kartu_keluarga', $kartu_keluargaName, 'public') : $kartu_keluarga,
            ]);

        $this->successMessage = 'Berkas berhasil diunggah!';
    }

    public function render()
    {
        return view('livewire.student.berkas');
    }
}
