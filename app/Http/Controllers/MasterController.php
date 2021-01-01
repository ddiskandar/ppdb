<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Major;

class MasterController extends Controller
{
    public function index() {
        return view('admin.master', [
            'majors' => Major::all(),
        ]);
    }
}
