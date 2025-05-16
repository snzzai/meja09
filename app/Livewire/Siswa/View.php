<?php

namespace App\Livewire\Siswa;

use Livewire\Component;
use App\Models\Siswa;

class View extends Component
{
    public $siswa;

    public function mount($id)
    {
        $this->siswa = Siswa::findOrFail($id);
    }

    public function ketStatusPKL($status)
    {
        if ($status === 'no') {
            return 'Belum diterima PKL';
        } elseif ($status === 'yes') {
            return 'Sudah diterima PKL';
        } else {
            return 'Status tidak diketahui';
        }
    }

    public function ketGender($gender)
    {
        if ($gender === 'L') {
            return 'Laki-laki';
        } elseif ($gender === 'P') {
            return 'Perempuan';
        } else {
            return 'Status tidak diketahui';
        }
    }

    public function render()
    {
        return view('livewire.siswa.view');
    }

}
