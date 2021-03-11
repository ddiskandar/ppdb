<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

use PDF;

class StudentController extends Controller
{
    public function pdf(Student $student)
    {
        $pdf = PDF::loadView('pdf.biodata', [
            'student' => $student,
        ]);
        return $pdf->stream($student->user->username . '.pdf');
    }
}
