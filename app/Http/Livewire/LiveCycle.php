<?php

namespace App\Http\Livewire;

use Livewire\Component;

class LiveCycle extends Component
{

    public $hobi;
    public $warna_kesukaan;

    public $proses = [];

    public function mount()
    {
        $this->hobi = 'bola';
        $this->warna_kesukaan = 'warna Hijau';
        $this->proses[] = "sedang di mount";
        //melakuakan mount
    }

    public function hydrate()
    {
        // melakukan mount perubahan 
        $this->proses[] = "sedang di hydrate";
    }


    public function updatingWarnaKesukaan($value)
    {
        $this->proses[] = "<b class=text-success> sedang di updated </b> ";
        $this->proses[] = 'Dari ' . $this->warna_kesukaan . ' menjadi ' . $value;
    }

    public function updatedWarnaKesukaan($value)
    {
        $this->proses[] = "<b class=text-danger> sedang di updated </b> ";
        $this->proses[] = 'Sudah Sama ' . $this->warna_kesukaan . ' = ' . $value;
    }
    public function updatingHobi($value)
    {
        $this->proses[] = "<b class=text-success> sedang di updated </b> ";
        $this->proses[] = 'Dari ' . $this->hobi . ' menjadi ' . $value;
    }

    public function updatedHobi($value)
    {
        $this->proses[] = "<b class=text-danger> sedang di updated </b> ";
        $this->proses[] = 'Sudah Sama ' . $this->hobi . ' = ' . $value;
    }



    public function render()
    {
        $this->proses[] = "sedang di render";
        $this->proses[] = "****************";
        return view('livewire.live-cycle');
    }
}
