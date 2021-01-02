<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\School;
use App\Models\Major;

class PagesController extends Controller
{
    //

    public function dashboard()
    {  
        $schools = School::orderByDesc('last_student')->take(15)->get();
        $majors = Major::all();

        // ddd($schools);
        return view('admin.dashboard', [
            'schools' => $schools,
            'majors' => $majors,

        ]);
    }
}
