<?php

namespace App\Models;

use App\Models\Student;
use App\Models\Jurusan;

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

    public function pilihan_satu()
    {
        return $this->hasOne(Jurusan::class, 'pilihan_satu');
    }

    public function pilihan_dua()
    {
        return $this->hasOne(Jurusan::class, 'pilihan_dua');
    }
}
