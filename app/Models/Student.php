<?php

namespace App\Models;

use App\Models\User;
use App\Models\Document;
use App\Models\Jurusan;
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

    public function document()
    {
        return $this->hasOne(Document::class);
    }

    public function jurusan()
    {
        return $this->hasOneThrough(Jurusan::class, Ppdb::class);
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

    public function bayar()
    {
        return $this->payments()->where('verified_by', true)->sum('amount');
    }

    public function lunas()
    {
        if ( $this->bayar() >= 150000 ) {
            return true;
        }
        return false;
    }

    public function pilihan_slug($pilihan) 
    {
        if ($pilihan == 1 ) {
            return "MM";
        } elseif ($pilihan == 2) {
            return "BDP";
        } else {
            return "APHP";
        }
    }

}
