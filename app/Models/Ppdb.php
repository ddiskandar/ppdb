<?php

namespace App\Models;

use App\Models\Student;
use App\Models\Major;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ppdb extends Model
{
    use HasFactory;

    protected $table = 'ppdb';
    protected $guarded = [];

    public function student()
    {
        return $this->belongsTo(Student::class);
    }

    public function major()
    {
        return $this->belongsTo(Major::class);
    }

    public function pilihan_satu()
    {
        return $this->hasOne(Major::class, 'pilihan_satu');
    }

    public function pilihan_dua()
    {
        return $this->hasOne(Major::class, 'pilihan_dua');
    }
}
