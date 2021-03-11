<?php

namespace App\Http\Livewire\Admin;

use App\Models\Payment;
use App\Models\Ppdb;
use App\Models\Periode;
use App\Models\Student;
use Livewire\Component;

use Livewire\WithPagination;

class Confirmation extends Component
{
    use WithPagination;
    
    public $verifyMode = false;
    public $search;
    public $student_id;
    public $payment_amount = 150000;
    public $name, $username, $amount, $status, $date, $note, $payment;

    public function verify($id)
    {
        $this->verifyMode = true;
        $payment = Payment::where('id', $id)->with('student', 'student.school', 'student.ppdb')->first();
        $this->payment = $payment;
        $this->name = $payment->student->user->name;
        $this->username = $payment->student->user->username;
        $this->amount = $payment->amount;
        $this->payment_amount = $payment->student->ppdb->payment_amount;
        $this->date = $payment->date;
        $this->note = $payment->note;
    }

    public function newPayment()
    {
        $this->reset();
        $this->verifyMode = false;
    }

    public function updatePayment()
    {
        Payment::where('id', $this->payment->id)
        ->update([
            'verified_by' => auth()->user()->id,
            'amount' => $this->amount,
            'note' => $this->note,
            'date' => $this->date,
            'status' => true,
        ]);
    }

    public function addPayment()
    {
        Payment::Create([
            'id' => isset($this->payment) ?? $this->payment->id,
            'student_id' => isset($this->student_id) ? $this->student_id : $this->payment->student_id,
            'verified_by' => auth()->user()->id,
            'amount' => $this->amount,
            'note' => $this->note,
            'date' => $this->date,
            'status' => true,
        ]);

        $ppdb = Ppdb::where('student_id', $this->student_id)->first();
        
        if( ! empty($ppdb) ){
            $ppdb->update([
                'payment_amount' => $this->payment_amount,
            ]);
        } else {
            Ppdb::create([
                'student_id' => isset($this->student_id) ? $this->student_id : $this->payment->student_id,
                'periode_id' => Periode::where('active', true)->first()->id,
                'payment_amount' => $this->payment_amount,
            ]);
        }

        $this->reset();
    }

    public function render()
    {
        return view('livewire.admin.confirmation', [
            'payments' => Payment::with('student', 'student.user')->latest()->get(),
            'students' => Student::with('user', 'payments')
                            ->get()
                            ->sortBy(function($query){
                                return $query->user->name;
                            }),
        ]);
    }
}
