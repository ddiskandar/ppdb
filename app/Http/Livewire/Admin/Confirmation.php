<?php

namespace App\Http\Livewire\Admin;

use App\Models\Payment;
use Livewire\Component;

class Confirmation extends Component
{
    public $search, $name, $amount, $status, $payment_amount, $date, $note, $payment;

    public function confirm($id)
    {
        $payment = Payment::where('id', $id)->with('student')->first();
        $this->name = $payment->student->user->name;
        $this->amount = $payment->amount;
        $this->payment_amount = $payment->student->ppdb->payment_amount;
        $this->date = $payment->date;
        $this->note = $payment->note;
        $this->payment = $payment;
    }

    public function submit()
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
    
    public function render()
    {
        return view('livewire.admin.confirmation', [
            'payments' => Payment::with('student')->get(),
        ]);
    }
}
