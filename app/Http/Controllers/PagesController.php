<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\School;
use App\Models\Jurusan;
use App\Models\Periode;

class PagesController extends Controller
{
    public function dashboard()
    {  
        return view('admin.dashboard', [
            'schools' => School::with('students')->orderByDesc('last_students')->take(15)->get(),
            'jurusans' => Jurusan::all(),
            'periode' => Periode::where('active', true)->first(),
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
