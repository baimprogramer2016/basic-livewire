<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ActionTutor extends Component
{
    public $keranjang = 0;

    public function increment()
    {
        $this->keranjang++;
    }

    public function decrement()
    {
        if ($this->keranjang > 0) {
            $this->keranjang--;
        }
    }

    public function render()
    {
        return view('livewire.action-tutor');
    }
}
