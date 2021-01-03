<?php

namespace App\Http\Livewire;

use App\Models\Document;
use Livewire\Component;
use Livewire\WithFileUploads;

use App\Models\Student;

class DataIdentitas extends Component
{
    use WithFileUploads;

    public $photo;
    public $nik;
    public $nisn;
    public $phone;
    public $address;
    public $successMessage;

    public function mount()
    {
        $student = auth()->user()->student;

        $this->nik = $student->nik;
        $this->nisn = $student->nisn;
        $this->phone = $student->phone;
        $this->address = $student->address;
        $this->photo = $student->documents->where('type', 'photo')->first()->path;
    }

    protected $rules = [
        'nik' => 'min:6',
        'nisn' => 'min:6',
        'phone' => 'min:10',
        'address' => 'min:5',
    ];

    public function updateIdentitas()
    {

        $validatedData = $this->validate();

        $student = auth()->user()->student;

        Student::where('id', $student->id)
                ->update($validatedData);

        $this->successMessage = 'Data berhasil diperbaharui!';
    }

    public function updated()
    {
        $this->validate();
        $this->successMessage = '';

    }

    public function updatedPhoto()
    {
        $this->validate([
            'photo' => 'image|max:1024', // 1MB Max
        ]);

        $uploaded = $this->photo->store('photo', 'public');

        $student = auth()->user()->student;

        Document::upsert([
            'id' => $student->documents->where('type', 'photo')->first()->id,
            'type' => 'photo',
            'path' => $uploaded,
            'student_id' => $student->id,
        ], ['id', 'student_id', 'type'], ['path']);
    }




    public function render()
    {
        $student = auth()->user()->student;

        return view('livewire.data-identitas', [
            'student' => $student,
        ]);
    }
}
