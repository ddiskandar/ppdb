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

    public function ttl()
    {
        return $this->birthdate ? $this->birthplace . ', ' . date('d-m-Y', strtotime($this->birthdate)) : '-';
    }

    public function alamat_lengkap()
    {
        return $this->address ? $this->address . ' Rt. ' . $this->rt . '/' . $this->rw . ' Ds. ' . $this->desa . ' Kec. ' . $this->kecamatan . ' Kab. ' . $this->kab . ' ' . $this->prov : '-';
    }

    public function pilihan_kelas()
    {
        if ($this->ppdb->pilihan_kelas === 1) {
            return 'Boarding';
        }
        return 'Regular';
    }

    public function is_alur_completed()
    {
        return $this->ppdb->pilihan_satu
            && $this->ppdb->join_wa
            && $this->is_data_completed() 
            && $this->is_payment_completed()
            && $this->is_document_completed();
    }

    public function is_document_completed()
    {
        return isset($this->document->kartu_keluarga);
    }

    public function is_data_completed()
    {
        return isset(
            $this->panggilan, 
            $this->jk,
            $this->nisn,
            $this->nik,
            $this->kk,
            $this->birthplace,
            $this->birthdate,
            $this->akta,
            $this->agama_id,
            $this->address,
            $this->rt,
            $this->rw,
            $this->desa,
            $this->kecamatan,
            $this->kab,
            $this->prov,
            $this->kode_pos,
            $this->tinggal_id,
            $this->transportasi_id,
            $this->phone,
        );
    }

    public function un_bayar()
    {
        return $this->payments->where('status', false)->sum('amount');
    }

    public function bayar()
    {
        return $this->payments->where('status', true)->sum('amount');
    }

    public function is_payment_completed()
    {
        return $this->bayar() >= ( ! empty($this->ppdb) ? $this->ppdb->payment_amount : Periode::where('active', true)->first()->ref_payment_amount );
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
