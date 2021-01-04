<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Student;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Eloquent\Factories\Factory;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $request->validate([
            'school_id' => 'required',
            'name' => 'required|string|max:255',
            // 'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|confirmed|min:6',
        ]);

        $user = User::factory()->create([
            'name' => $request->name,
            // 'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        $user['username'] = $user->username;

        Auth::login($user);

        Student::create([
            'user_id' => $user->id,
            'school_id' => $request->school_id,
            'ibu_nama' => $request->ibu_nama,
            'nisn' => $request->nisn,
            'phone' => $request->phone,
        ]);

        $user->assignRole('student');

        event(new Registered($user));

        return redirect(RouteServiceProvider::HOME);
    }
}
