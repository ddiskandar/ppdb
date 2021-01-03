<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\School;
use App\Models\Major;
use App\Models\Periode;

class PagesController extends Controller
{
    //

    public function dashboard()
    {  
        $schools = School::orderByDesc('last_students')->take(15)->get();
        $majors = Major::all();
        $periode = Periode::where('active', true)->first();

        // ddd($schools);
        return view('admin.dashboard', [
            'schools' => $schools,
            'majors' => $majors,
            'periode' => $periode,

        ]);
    }

}
