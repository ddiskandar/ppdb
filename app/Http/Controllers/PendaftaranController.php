<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class PendaftaranController extends Controller
{
    public function index()
    {
        return view('admin.pendaftaran', [
            'students' => Student::all()
        ]);
    }
}
