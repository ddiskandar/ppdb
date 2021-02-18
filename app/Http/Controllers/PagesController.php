<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\School;
use App\Models\Jurusan;
use App\Models\Periode;
use App\Models\Student;

class PagesController extends Controller
{
    public function dashboard()
    {  
        return view('admin.dashboard', [
            'schools' => School::withCount('students')->take(6)->orderByDesc('last_students')->get(),
            'jurusans' => Jurusan::all(),
            'periode' => Periode::where('active', true)->first(),
            'students' => Student::count(),
        ]);
    }

    public function master()
    {
        return view('admin.master', [
            'jurusans' => Jurusan::all(),
        ]);
    }

    public function home()
    {
        return view('student.home');
    }

}
