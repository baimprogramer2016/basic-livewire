<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ArticleData extends Component
{

    public $nama;
    public $alamat;

    public function mount($kirimdata)
    {
        $this->nama = $kirimdata['nama'];
        $this->alamat = $kirimdata['alamat'];
    }
    public function render()
    {
        return view('livewire.article-data');
    }
}
