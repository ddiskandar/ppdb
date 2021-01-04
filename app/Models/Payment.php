<?php

namespace App\Models;

use App\Models\Student;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;

    public function student()
    {
        return $this->belongsTo(Student::class);
    }
}
