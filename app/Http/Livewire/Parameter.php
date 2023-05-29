<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Parameter extends Component
{
    public $nama;
    public $pass;

    public $show_password = true;

    public function render()
    {
        return view('livewire.parameter');
    }
}
