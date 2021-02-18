<?php

namespace App\Http\Livewire\Admin;

use App\Models\Student;
use App\Models\User;
use App\Models\School;
use Livewire\Component;

use Livewire\WithPagination;

class Pendaftaran extends Component
{
    use WithPagination;

    public $search;
    public $school;
    public $showDetail = false;

    public $name, $username, $phone, $ttl, $address, $ayah_nama, $ibu_nama;

    protected $queryString = ['search'];

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function edit($id)
    {
        $student = Student::where('id', $id)->with('user')->first();
        $this->name = $student->user->name;
        $this->username = $student->user->username;
        $this->phone = $student->phone;
        $this->ttl = $student->birthplace . ', ' . $student->birthdate;
        $this->address = $student->address . ' Rt. ' . $student->rt . '/' . $student->rw . ' Ds. ' . $student->desa . ' Kec. ' . $student->kecamatan . ' Kab. ' . $student->kab . ' ' . $student->prov;
        $this->ayah_nama = $student->ortu->ayah_nama;
        $this->ibu_nama = $student->ortu->ibu_nama;
    }

    public function render()
    {
        return view('livewire.admin.pendaftaran', [
            'students' => Student::whereHas('user', function ( $query) {
                $query->where('name', 'like', '%'.$this->search.'%');
            })->WhereHas('school', function ($query) {
                 $query->where('name','like', '%'.$this->school.'%');
            })->orderByDesc('created_at')
            ->with('school', 'user', 'document', 'ppdb', 'payments')
            ->paginate(7),
            'schools' => School::all(),
        ]);
    }
}
