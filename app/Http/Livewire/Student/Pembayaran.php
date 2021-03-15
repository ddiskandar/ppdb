<?php

namespace App\Http\Livewire\Student;

use App\Models\Payment;
use Livewire\Component;
use Livewire\WithFileUploads;

class Pembayaran extends Component
{
    use WithFileUploads;

    public $successMessage;

    public $amount = 150000;
    public $date;
    public $attachment;

    public function submitKonfirmasi()
    {
        $this->validate([
            'amount' => 'required',
            'attachment' => 'required',
            'date' => 'required',
        ]);

        $user = auth()->user();
        $this->student = $user->student;

        $attachmentName = $user->username . '-' . $user->name . '.' . $this->attachment->extension();

        Payment::where('student_id', $this->student->id)
            ->create([
                'student_id' => $this->student->id,
                'amount' => $this->amount,
                'date' => $this->date,
                'attachment' => $this->attachment->store('pembayaran', 'public'),
            ]);

        $this->resetForm();

        $this->successMessage = 'Konfirmasi pembayaran berhasil diunggah!';
    }

    public function resetForm()
    {
        $this->amount = ''; 
        $this->date = ''; 
        $this->attachment = ''; 
    }
    
    public function render()
    {
        return view('livewire.student.pembayaran');
    }
}
