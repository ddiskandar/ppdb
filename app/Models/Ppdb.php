<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ppdb extends Model
{
    use HasFactory;

    protected $table = 'ppdb';

    public function student()
    {
        return $this->belongsTo(Student::class);
    }

    public function major()
    {
        return $this->belongsTo(Major::class);
    }
}
