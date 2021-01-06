<?php

namespace App\Models;

use App\Models\Student;
use App\Models\Pekerjaan;
use App\Models\Pendidikan;
use App\Models\Penghasilan;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ortu extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function student()
    {
        return $this->belongsTo(Student::class);
    }

    public function pekerjaan()
    {
        return $this->hasOne(Pekerjaan::class);
    }

    public function pendidikan()
    {
        return $this->hasOne(Pendidikan::class);
    }

    public function penghasilan()
    {
        return $this->hasOne(Penghasilan::class);
    }
}
