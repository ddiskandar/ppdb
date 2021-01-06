<?php

namespace App\Models;

use App\Models\User;
use App\Models\Document;
use App\Models\Major;
use App\Models\Payment;
use App\Models\Ppdb;
use App\Models\School;
use App\Models\Agama;
use App\Models\Pip;
use App\Models\Tinggal;
use App\Models\Transportasi;
use App\Models\Ortu;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function school()
    {
        return $this->belongsTo(School::class);
    }

    public function ppdb()
    {
        return $this->hasOne(Ppdb::class);
    }

    public function ortu()
    {
        return $this->hasOne(Ortu::class);
    }

    public function payments()
    {
        return $this->hasMany(Payment::class);
    }

    public function documents()
    {
        return $this->hasMany(Document::class);
    }

    public function major()
    {
        return $this->hasOneThrough(Major::class, Ppdb::class);
    }

    public function agama()
    {
        return $this->belongsTo(Agama::class);
    }

    public function pip()
    {
        return $this->belongsTo(Pip::class);
    }

    public function tinggal()
    {
        return $this->belongsTo(Tinggal::class);
    }

    public function transportasi()
    {
        return $this->belongsTo(Transportasi::class);
    }

    public function is_data_completed()
    {
        if ( ! isset(
            $this->panggilan, 
            $this->nisn,
        )) {
            return false;
        }
        
        return true;
    }

}
