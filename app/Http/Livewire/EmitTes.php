<?php

namespace App\Http\Livewire;

use Livewire\Component;

class EmitTes extends Component
{

    public $postCount;
    public $tampil = 'sebelum';

    protected $listener = ['postedAdd', 'incrementPost'];

    public function incrementPost()
    {
        $this->tampil = 'Anhari';
    }

    public function render()
    {
        return view('livewire.emit-tes');
    }
}
