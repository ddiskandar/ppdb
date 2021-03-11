<?php

namespace App\Http\Livewire\Admin;

use App\Models\Document;
use App\Models\User;
use App\Models\Student;
use App\Models\Ortu;
use App\Models\Periode;
use App\Models\Ppdb;
use App\Models\School;
use Livewire\Component;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\Hash;

use Illuminate\Support\Facades\DB;

use Livewire\WithPagination;

class Pendaftaran extends Component
{
    use WithPagination;

    public $search;
    public $filterSchool;
    public $student;
    public $pilihan_kelas;
    public $name;
    public $jk;
    public $nisn;
    public $phone;
    public $school_id;
    public $ayah_nama;
    public $ibu_nama;
    public $address;
    public $rt;
    public $rw;
    public $desa;
    public $kecamatan;
    public $kab;
    public $prov;

    public $successMessage;

    protected $rules = [
        'student' => '',
    ];
    
    protected $queryString = [
        'search' => ['except' => ''],
    ];

    public function updatingSearch()
    {
        $this->resetPage();
    }
    public function updatingFilterSchool()
    {
        $this->resetPage();
    }

    public function detailStudent($id)
    {
        $this->student = Student::where('id', $id)->with('user')->first();
        $this->successMessage = '';
    }

    public function addNewStudent()
    {
        DB::transaction( function () {

            $user = User::factory()->create([
                'name' => $this->name,
                'password' => Hash::make('password'),
            ]);

            $student = Student::create([
                'user_id' => $user->id,
                'school_id' => $this->school_id,
                'jk' => $this->jk,
                'nisn' => $this->nisn,
                'phone' => $this->phone,
                'address' => $this->address,
                'rt' => $this->rt,
                'rw' => $this->rw,
                'desa' => $this->desa,
                'kecamatan' => $this->kecamatan,
                'kab' => $this->kab,
                'prov' => $this->prov,
            ]);

            $periode = Periode::where('active', true)->first();

            Ppdb::create([
                'student_id' => $student->id,
                'periode_id' => $periode->id,
                'pilihan_kelas' => $this->pilihan_kelas,
                'payment_amount' => $periode->ref_payment_amount,
            ]);

            Ortu::create([
                'student_id' => $student->id,
                'ibu_nama' => $this->ibu_nama,
                'ayah_nama' => $this->ayah_nama,
            ]);

            Document::create([
                'student_id' => $student->id,
            ]);

            $user->assignRole('student');

            $this->newStudent = [];
            
            $this->reset([
                'search', 'filterSchool', 'student', 'pilihan_kelas', 'name', 'jk', 'nisn', 'phone', 'school_id', 'ayah_nama', 'ibu_nama', 'address', 'rt', 'rw', 'desa', 'kecamatan', 'kab', 'prov',
            ]);

            $this->student = Student::where('id', $student->id)->with('user')->first();
        });
        
    }

    public function resetPassword(  )
    {
        User::where('id', $this->student->user->id)
            ->update([
                'password' => Hash::make('12345678'),
            ]);
        
        $this->successMessage = 'Password menjadi 12345678';

    }

    public function render()
    {
        return view('livewire.admin.pendaftaran', [
            'students' => Student::whereHas('user', function ( $query) {
                $query->where('name', 'like', '%'.$this->search.'%');
            })->WhereHas('school', function ($query) {
                 $query->where('name','like', '%'.$this->filterSchool.'%');
            })->orderByDesc('created_at')
            ->with('school', 'user', 'document', 'ppdb', 'payments')
            ->paginate(7),
            'schools' => School::all(),
        ]);
    }
}
