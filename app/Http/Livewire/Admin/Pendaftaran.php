<?php

namespace App\Http\Livewire\Admin;

use Illuminate\Database\Eloquent\Builder;

use App\Models\Student;
use App\Models\School;
use Livewire\Component;

use Livewire\WithPagination;

class Pendaftaran extends Component
{
    use WithPagination;

    public $search;
    public $school;

    public function render()
    {
        return view('livewire.admin.pendaftaran', [
            'students' => Student::whereHas('user', function ( $query) {
                $query->where('name', 'like', '%'.$this->search.'%');
            })->WhereHas('school', function ($query) {
                 $query->where('name','like', '%'.$this->school.'%');
            })->orderByDesc('created_at')
            ->paginate(7),
            'schools' => School::all(),
        ]);
    }
}
