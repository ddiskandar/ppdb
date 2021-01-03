<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\School;
use App\Models\Major;
use App\Models\Periode;

class PagesController extends Controller
{
    public function dashboard()
    {  
        return view('admin.dashboard', [
            'schools' => School::orderByDesc('last_students')->take(15)->get(),
            'majors' => Major::all(),
            'periode' => Periode::where('active', true)->first(),
        ]);
    }

    public function master()
    {
        return view('admin.master', [
            'majors' => Major::all(),
        ]);
    }

    public function home()
    {
        return view('siswa.home', [
            'periode' => Periode::where('active', true)->first(),
        ]);
    }

}
