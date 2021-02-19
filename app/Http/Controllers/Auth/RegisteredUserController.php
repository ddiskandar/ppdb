<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Document;
use App\Models\User;
use App\Models\Student;
use App\Models\Ortu;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\DB;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('welcome');
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

        DB::transaction(function () use ($request) {
            $user = User::factory()->create([
                'name' => $request->name,
                // 'email' => $request->email,
                'password' => Hash::make($request->password),
            ]);

            $user['username'] = $user->username;

            $student = Student::create([
                'user_id' => $user->id,
                'school_id' => $request->school_id,
                'jk' => $request->jk,
                'nisn' => $request->nisn,
                'phone' => $request->phone,
            ]);

            Ortu::create([
                'student_id' => $student->id,
                'ibu_nama' => $request->ibu_nama,
            ]);

            Document::create([
                'student_id' => $student->id,
            ]);

            $user->assignRole('student');

            Auth::login($user);

            event(new Registered($user));

        });
        
        return redirect(RouteServiceProvider::HOME);
    }
}
