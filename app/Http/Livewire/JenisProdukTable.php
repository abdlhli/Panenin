<?php

namespace App\Http\Livewire;

use App\Models\JenisProduk;
use Livewire\Component;

class JenisProdukTable extends Component
{
    public $jenis_produk;

    public function mount()
    {
        // Mendapatkan semua data banner
        $this->jenis_produk = JenisProduk::all();
    }

    public function render()
    {
        return view('livewire.jenis-produk-table');
    }
}
