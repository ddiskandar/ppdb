<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Periode;

class StudentsController extends Controller
{
    public function home()
    {
        $periode = Periode::where('active', true)->first();

        return view('siswa.home', [
            'periode' => $periode,
        ]);
    }
}
