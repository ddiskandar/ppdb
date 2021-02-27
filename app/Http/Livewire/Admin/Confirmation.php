<?php

namespace App\Http\Livewire\Admin;

use App\Models\Payment;
use App\Models\Student;
use Livewire\Component;

class Confirmation extends Component
{
    public $search;
    public $student;
    public $name, $username, $amount, $status, $payment_amount, $date, $note, $payment;

    public function verify($id)
    {
        $payment = Payment::where('id', $id)->with('student', 'student.school')->first();
        $this->name = $payment->student->user->name;
        $this->username = $payment->student->user->username;
        $this->amount = $payment->amount;
        $this->payment_amount = $payment->student->ppdb->payment_amount;
        $this->date = $payment->date;
        $this->note = $payment->note;
        $this->payment = $payment;
    }

    public function addNewPayment()
    {

    }

    public function submit()
    {
        Payment::upsert(
            [
                'id' => $this->payment->id,
                'student_id' => $this->payment->student_id,
                'verified_by' => auth()->user()->id,
                'amount' => $this->amount,
                'note' => $this->note,
                'date' => $this->date,
                'status' => true,
            ], 
            ['id', 'student_id'], 
            ['verified_by', 'amount', 'note', 'date', 'status']
        );
    }
    
    public function render()
    {
        return view('livewire.admin.confirmation', [
            'payments' => Payment::with('student', 'student.user')->get(),
            'students' => Student::with('school')->latest()->get(),
        ]);
    }
}
