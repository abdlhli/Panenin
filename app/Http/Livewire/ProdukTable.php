<?php

namespace App\Http\Livewire;

use App\Models\Produk;
use Livewire\Component;

class ProdukTable extends Component
{
    public $produk;

    public function mount()
    {
        // Mendapatkan semua data banner
        $this->produk = Produk::all();
    }

    public function render()
    {
        return view('livewire.produk-table');
    }
}
