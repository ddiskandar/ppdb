<?php

namespace App\Http\Livewire\Auth;

use Illuminate\Support\Facades\Hash;
use Livewire\Component;
use App\Models\User;

class UpdatePassword extends Component
{
    public $currentPassword;
    public $password;
    public $passwordConfirmation;
    public $successMessage;

    protected $messages = [
        'currentPassword.required' => 'Password sekarang harus diisi',
    ];

    public function submitUpdate()
    {
        $this->validate([
            'currentPassword' => 'required',
            'password' => 'required|min:6',
            'passwordConfirmation' => 'required',
        ]);


        $user = User::where('id', auth()->user()->id)->first();

        if ( Hash::check($this->currentPassword, $user->password) 
            && $this->password === $this->passwordConfirmation )
        {
            $user->update([
                'password' => Hash::make($this->password),
            ]);

            return $this->successMessage = "Password berhasil diperbaharui.";
            
        }

        return $this->successMessage = "Periksa kembali, ada yang tidak sesuai.";

    }

    public function render()
    {
        return view('livewire.auth.update-password');
    }
}
