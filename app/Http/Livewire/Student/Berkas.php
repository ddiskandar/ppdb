<?php

namespace App\Http\Livewire\Student;

use Livewire\Component;
use Livewire\WithFileUploads;

use App\Models\Document;

class Berkas extends Component
{
    use WithFileUploads;

    public $successMessage;
    public $successMessageKesejahteraan;

    public $akta;
    public $kartu_keluarga;
    public $skl;
    public $ijazah;
    public $kks;
    public $no_kks;
    public $kip;
    public $no_kip;
    public $kis;
    public $no_kis;
    public $pkh;
    public $no_pkh;

    public function mount()
    {
        $this->student = auth()->user()->student;

        $this->no_kks =  $this->student->document->no_kks;
        $this->no_kip =  $this->student->document->no_kip;
        $this->no_kis =  $this->student->document->no_kis;
        $this->no_pkh =  $this->student->document->no_pkh;
    }

    public function submitBerkas()
    {
        $this->validate([
            
        ]);
        
        $this->student = auth()->user()->student;
        $user = auth()->user();
        $akta = $this->student->document->akta ?? null;
        $kartu_keluarga = $this->student->document->kartu_keluarga ?? null;
        $skl = $this->student->document->skl ?? null;
        $ijazah = $this->student->document->ijazah ?? null;

        if($this->akta) {
            $aktaName = $user->username . '-' . $user->name . '.' . $this->akta->extension();
        }
        if($this->kartu_keluarga) {
            $kartu_keluargaName = $user->username . '-' . $user->name . '.' . $this->kartu_keluarga->extension();
        }
        if($this->skl) {
            $sklName = $user->username . '-' . $user->name . '.' . $this->skl->extension();
        }
        if($this->ijazah) {
            $ijazahName = $user->username . '-' . $user->name . '.' . $this->ijazah->extension();
        }

        Document::where('student_id', $this->student->id)
            ->update([
                'akta' => $this->akta ? $this->akta->storeAs('akta', $aktaName, 'public') : $akta,
                'kartu_keluarga' => $this->kartu_keluarga ? $this->kartu_keluarga->storeAs('kartu_keluarga', $kartu_keluargaName, 'public') : $kartu_keluarga,
                'skl' => $this->skl ? $this->skl->storeAs('skl', $sklName, 'public') : $skl,
                'ijazah' => $this->ijazah ? $this->ijazah->storeAs('ijazah', $ijazahName, 'public') : $ijazah,
            ]);

        $this->successMessage = 'Berkas berhasil diunggah!';
    }

    public function submitKesejahteraan()
    {

        $this->student = auth()->user()->student;
        $user = auth()->user();

        $kks = $this->student->document->kks ?? null;
        $kip = $this->student->document->kip ?? null;
        $kis = $this->student->document->kis ?? null;
        $pkh = $this->student->document->pkh ?? null;

        if ($this->kks) {
            $kksName = $user->username . '-' . $user->name . '.' . $this->kks->extension();
        }
        if ($this->kip) {
            $kipName = $user->username . '-' . $user->name . '.' . $this->kip->extension();
        }
        if ($this->kis) {
            $kisName = $user->username . '-' . $user->name . '.' . $this->kis->extension();
        }
        if ($this->pkh) {
            $pkhName = $user->username . '-' . $user->name . '.' . $this->pkh->extension();
        }

        Document::where('student_id', $this->student->id)
            ->update([
                'kks' => $this->kks ? $this->kks->storeAs('kks', $kksName, 'public') : $kks,
                'no_kks' => $this->no_kks,
                'kip' => $this->kip ? $this->kip->storeAs('kip', $kipName, 'public') : $kip,
                'no_kip' => $this->no_kip,
                'kis' => $this->kis ? $this->kis->storeAs('kis', $kisName, 'public') : $kis,
                'no_kis' => $this->no_kis,
                'pkh' => $this->pkh ? $this->pkh->storeAs('pkh', $pkhName, 'public') : $pkh,
                'no_pkh' => $this->no_pkh,
            ]);

        $this->successMessageKesejahteraan = 'Berkas Kartu Kesejahteraan berhasil diunggah!';
    }

    public function render()
    {
        return view('livewire.student.berkas');
    }
}
