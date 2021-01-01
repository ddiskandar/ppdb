<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Major;
use App\Models\School;

class MasterController extends Controller
{
    public function index() {
        return view('admin.master', [
            'majors' => Major::all(),
            'schools' => School::all(),
        ]);
    }
}
