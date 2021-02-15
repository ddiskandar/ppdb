<?php

namespace App\Http\Livewire\Auth;

use Illuminate\Support\Facades\Hash;
use Livewire\Component;
use App\Models\User;

class UpdatePassword extends Component
{
    public $password;
    public $successMessage;

    public function submitUpdate()
    {
        // Validator::make($input, [
        //     'current_password' => ['required', 'string'],
        //     'password' => $this->passwordRules(),
        // ])->after(function ($validator) use ($user, $input) {
        //     if (!Hash::check($input['current_password'], $user->password)) {
        //         $validator->errors()->add('current_password', __('The provided password does not match your current password.'));
        //     }
        // })->validateWithBag('updatePassword');

        User::where('id', auth()->user()->id)
        ->update([
            'password' => Hash::make($this->password)
        ]);

        $this->successMessage = "Password berhasil diperbaharui.";

    }

    public function render()
    {
        return view('livewire.auth.update-password');
    }
}
