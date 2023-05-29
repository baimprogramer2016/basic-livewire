<?php

namespace App\Http\Livewire;

use Livewire\Component;

class FullComponent extends Component
{

    public $get_name;
    public function mount($name)
    {
        $this->get_name = $name;
    }
    public function render()
    {
        return view('livewire.full-component');
    }
}
