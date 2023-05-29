<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Product;
use Livewire\WithPagination;

class Paginate extends Component
{

    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public $search;
    public function render()
    {
        $query_product = Product::query();

        $query_product->when($this->search, function ($q) {
            return $q->where('nama', 'like', '%' . $this->search . '%');
        });

        $data_product = $query_product->paginate(5);

        return view('livewire.paginate', [
            "data_product" => $data_product,
        ]);
    }

    public function updatingSearch()
    {
        $this->resetPage();
    }
}
