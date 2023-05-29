<?php

namespace App\Http\Livewire;

use Livewire\Component;
use PhpParser\ErrorHandler\Collecting;

class ArticleTable extends Component
{
    public $halo = 'Halo';
    public $dataarray = ["nama" => "Baimx", "alamat" => "cipinang"];

    public function render()
    {
        return view('livewire.article-table');
    }
}
